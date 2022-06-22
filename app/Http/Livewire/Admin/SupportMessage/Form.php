<?php

namespace App\Http\Livewire\Admin\SupportMessage;

use Livewire\Component;

use App\Models\ContactFormMessage;

class Form extends Component
{
    public $messageId;
    public $name;
    public $email;
    public $subject;
    public $phone_number;
    public $message;
    public $email_sent;
    public $created_at;
    public $is_read;

    protected $listeners = ['toggleMessage'];

    public function resetFields() {
        $this->messageId = "";
        $this->name = "";
        $this->email = "";
        $this->subject = "";
        $this->phone_number = "";
        $this->message = "";
        $this->email_sent = "";
        $this->created_at = "";
        $this->is_read = "";
    }

    public function mount()
    {
        $this->resetFields();
    }

    public function toggleMessage($messageId)
    {
        $this->resetFields();

        $this->messageId = $messageId;

        $this->load();
    }

    public function load()
    {
        if (!intval($this->messageId)) {
            return;
        }

        $message = ContactFormMessage::find($this->messageId);

        $this->messageId = $message->messageId;
        $this->name = $message->name;
        $this->email = $message->email;
        $this->subject = $message->subject;
        $this->phone_number = $message->phone_number;
        $this->message = $message->message;
        $this->email_sent = $message->email_sent;
        $this->created_at = $message->created_at;
        $this->is_read = $message->is_read;
    }

    public function render()
    {
        return view('livewire.admin.support-message.form-support-message');
    }
}
