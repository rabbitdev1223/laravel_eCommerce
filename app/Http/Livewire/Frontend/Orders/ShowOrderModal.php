<?php

namespace App\Http\Livewire\Frontend\Orders;

use App\Mail\OrderSent;
use App\Models\Order;
use Livewire\Component;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Mail;

class ShowOrderModal extends Component
{
    protected $listeners = ['showOrder'];

    public $order, $orderItems;

    public function render()
    {
        return view('livewire.frontend.orders.show-order-modal');
    }

    public function showOrder(Order $order)
    {
        $this->order = $order;
        $this->orderItems = OrderItem::where('order_id', $order->id)->get();
    }
}
