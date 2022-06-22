<?php

namespace App\Http\Livewire\Frontend\Manager;

use App\Models\Order;
use Livewire\Component;

class OrdersTable extends Component
{
    public $orders;

    public function mount($orders)
    {
        $this->orders = $orders;
    }

    public function render()
    {
        return view('livewire.frontend.manager.orders-table');
    }

    public function approveOrder(Order $order)
    {
        $orderId = $order->id;
        $order->payment_status_id = 1;
        $order->save();
        $this->orders = $this->orders->map(function($item) use($orderId) {
            return $item->id == $orderId ? $item->refresh() : $item;
        });
    }
}
