<?php

namespace App\Http\Livewire\Frontend\Support;

use App\Models\ContactFormMessage;
use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $phone_number, $subject, $message;

    protected $rules = [
        'name' => ['required', 'string'],
        'email' => ['required', 'email:rfc'],
        'phone_number' => ['string'],
        'subject' => ['string'],
        'message' => ['string']
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.frontend.support.contact-form');
    }

    public function saveMessage()
    {
        $validatedData = $this->validate();

        ContactFormMessage::create($validatedData);

        // session()->flash('message', 'Message Successfully Sent.');

        $this->reset();

        $this->dispatchBrowserEvent('toastr', 'Message successfully sent.');
    }
}
