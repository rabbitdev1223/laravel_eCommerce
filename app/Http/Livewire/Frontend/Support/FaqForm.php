<?php

namespace App\Http\Livewire\Frontend\Support;

use App\Models\Faq;
use Livewire\Component;

class FaqForm extends Component
{
    public $faqs;

    public function mount()
    {
        $this->faqs = Faq::all();
    }

    public function render()
    {
        return view('livewire.frontend.support.faq-form');
    }
}
