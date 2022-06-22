<?php

namespace App\Http\Livewire\Admin\SupportMessage;

use Livewire\Component;
use App\Models\ContactFormMessage;

class MessagesTable extends Component
{
    public $messagesIds;

    public function mount($messages)
    {
        $this->messagesIds = $messages->pluck('id');
    }

    public function markReadUnRead($messageId)
    {
        $message = ContactFormMessage::find($messageId);
        $message->is_read = !$message->is_read;

        $message->save();
    }

    public function render()
    {
        return view('livewire.admin.support-message.messages-table', ['messages' => ContactFormMessage::whereIn('id', $this->messagesIds)->get()]);
    }
}
