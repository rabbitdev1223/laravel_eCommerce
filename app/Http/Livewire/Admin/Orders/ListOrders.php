<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;

class ListOrders extends Component
{
    public $search;

    protected $listeners = ['echo-private:orders,OrderCreated' => 'render', 'statusUpdated' => 'render', 'echo-private:orders,OrderUpdated' => 'render', 'filterUpdated'];

    public function mount()
    {
        if (request()->has('order_id')) {
            // debug('has id');
        }

        if (request()->has('search')) {
            $this->search = request()->search;
        }
    }

    public function render()
    {
        // debug(request()->search);

        $orders = Order::when($this->search, function ($query) {
            return $query->where('purchase_order_code', 'LIKE', '%' . $this->search . '%');
        })
            ->latest()
            ->get();

        return view('livewire.admin.orders.list-orders', compact('orders'));
    }

    public function filterUpdated($value)
    {
        $this->search = $value;
    }
}
