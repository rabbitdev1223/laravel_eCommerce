<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\OrderStatus;
use App\Models\PaymentStatus;
use App\Models\FulfillmentStatus;

class ShowOrderModal extends Component
{
    public $orderStatuses, $paymentStatuses, $fulfillmentStatuses;

    public $order_status, $payment_status, $fulfillment_status;

    protected $listeners = ['showOrder', 'echo-private:orders,OrderUpdated' => 'showOrder'];

    public $order, $orderItems;

    public function mount()
    {
        $this->orderStatuses = OrderStatus::all();

        $this->paymentStatuses = PaymentStatus::all();

        $this->fulfillmentStatuses = FulfillmentStatus::all();
    }

    public function render()
    {
        return view('livewire.admin.orders.show-order-modal');
    }

    public function showOrder(Order $order)
    {
        $this->order = $order;
        $this->orderItems = OrderItem::where('order_id', $order->id)->get();

        $this->order_status = $order->order_status_id;
        $this->payment_status = $order->payment_status_id;
        $this->fulfillment_status = $order->fulfillment_status_id;
    }

    public function updatedOrderStatus($value)
    {
        $this->order->update([
            'order_status_id' => $value
        ]);

        $this->order = Order::find($this->order->id);

        event(new \App\Events\OrderUpdated($this->order->id));

        $this->emit('statusUpdated');
    }

    public function updatedPaymentStatus($value)
    {
        $this->order->update([
            'payment_status_id' => $value
        ]);

        $this->order = Order::find($this->order->id);

        event(new \App\Events\OrderUpdated($this->order->id));

        $this->emit('statusUpdated');
    }

    public function updatedFulfillmentStatus($value)
    {
        $this->order->update([
            'fulfillment_status_id' => $value
        ]);

        $this->order = Order::find($this->order->id);

        event(new \App\Events\OrderUpdated($this->order->id));

        $this->emit('statusUpdated');
    }
}
