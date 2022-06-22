<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;

class FilterOrders extends Component
{
    public $search;

    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        return view('livewire.admin.orders.filter-orders');
    }

    public function updatedSearch($value)
    {
        $this->emit('filterUpdated', $value);
    }
}
