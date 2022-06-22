<?php

namespace App\Http\Livewire\Frontend\Manager\Dashboard;

use App\Mail\OrderSent;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendOrder extends Component
{
    public $order;
    public $email;
    public $url;
    public $notes;

    protected $listeners = ['showSendOrder'];

    public function mount()
    {
        $this->url = url()->current();
    }

    public function render()
    {
        return view('livewire.frontend.manager.dashboard.send-order');
    }

    public function showSendOrder(Order $order)
    {
        $this->order = $order->id;
    }

    public function updatedEmail($value)
    {
        $this->validate([
            'email' => 'required|email',
        ]);
    }

    public function sendOrder()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        Mail::to($this->email)
        ->send(new OrderSent(config('mail.from.address'), route('orders.invoices.show', $this->order), $this->order, $this->notes));

        session()->flash('message', 'Order has been sent.');

        return redirect()->to($this->url);
    }
}
