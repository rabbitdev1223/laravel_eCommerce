<?php

namespace App\Http\Livewire\Admin\Messaging;

use App\Models\User;
use Livewire\Component;
use Twilio\Rest\Client;
use App\Models\Conversation;

class ShowMessages extends Component
{
    protected $listeners = ['user-message-selected' => 'userSelected', 'refreshMessages' => 'refreshMessages'];

    public $user;

    public $channelIdentity;

    public $input;

    public function mount()
    {
        if (!auth()->user()->twilio_sid) {
            // Set twilio_id on user table
            $twilio = cache()->remember('twilio_rest_client', 3600, function () {
                return new Client(config('services.twilio.sid'), config('services.twilio.token'));
            });

            $twilioUser = $twilio->conversations->v1->services(config('services.twilio.services.chat'))->users->create(auth()->id(), [
                'friendlyName' => auth()->user()->email
            ]);

            auth()->user()->update([
                'twilio_sid' => $twilioUser->sid
            ]);
        }
    }

    public function render()
    {
        $messages = collect();

        if ($this->channelIdentity) {
            $twilio = cache()->remember('twilio_rest_client', 60 * 60, function () {
                return new Client(config('services.twilio.sid'), config('services.twilio.token'));
            });

            $messages = $twilio->conversations->v1->services(config('services.twilio.services.chat'))->conversations($this->channelIdentity)->messages->read();
        }

        return view('livewire.admin.messaging.show-messages', compact('messages'));
    }

    public function userSelected(User $user)
    {

        $this->user = $user;

        $users = collect();

        $users->push($user->id);
        $users->push(auth()->id());

        // $conversation = Conversation::whereHas('users', function ($query) use ($users) {
        //     $query->whereIn('user_id', $users);
        // })->first();

        $conversation = auth()->user()->conversations->whereIn('id', $user->conversations->pluck('id'))->first();

        $twilio = cache()->remember('twilio_rest_client', 60 * 60, function () {
            return new Client(config('services.twilio.sid'), config('services.twilio.token'));
        });

        if ($conversation) {
            // debug('found conversation');
        } else {
            $twilioConversation = $twilio->conversations->v1->services(config('services.twilio.services.chat'))->conversations->create();

            $conversation = Conversation::create([
                'channel_sid' => $twilioConversation->sid
            ]);

            $users->each(function ($user_id) use ($twilio, $twilioConversation) {
                $twilio->conversations->v1->services(config('services.twilio.services.chat'))->conversations($twilioConversation->sid)->participants->create([
                    'identity' => $user_id,
                ]);
            });

            $conversation->users()->attach(User::find($users));
        }

        $this->channelIdentity = $conversation->channel_sid;
    }

    public function sendMessage()
    {
        $this->validate([
            'input' => 'required'
        ]);

        $twilio = cache()->remember('twilio_rest_client', 60 * 60, function () {
            return new Client(config('services.twilio.sid'), config('services.twilio.token'));
        });

        $twilio->conversations->v1->services(config('services.twilio.services.chat'))->conversations($this->channelIdentity)->messages->create([
            'author' => auth()->user()->first_name . ' ' . auth()->user()->last_name,
            'body' => $this->input,
        ]);

        $this->reset('input');
    }

    public function refreshMessages($author)
    {
        if ($this->user) {
            if (auth()->user()->name != $author && $author == $this->user->first_name . ' ' . $this->user->last_name) {
                $this->render();
            }
        }
    }
}
