<?php

namespace App\Http\Livewire\Admin\Faq;

use App\Models\Faq;
use Livewire\Component;

class ManageFaq extends Component
{
    public $faqs;

    public $prev_faqs;

    public $indexToDelete;

    public $modifiedIds;

    protected $rules = [
        'faqs.*.question' => 'required|string|min:2',
        'faqs.*.answer' => 'required|string|min:2|max:5000',
    ];

    protected $messages = [
        'faqs.*.question.required' => 'The question field is required.',
        'faqs.*.question.min' => 'The question must be at least 2 character.',
        'faqs.*.answer.required' => 'The answer field is required.',
        'faqs.*.answer.min' => 'The answer must be at least 2 character.',
        'faqs.*.answer.max' => 'The answer must be less than 5000 character.',
    ];

    public function mount()
    {
        $this->faqs = Faq::select('question', 'answer')->get()->toArray();
        $this->prev_faqs = $this->faqs;

        $this->indexToDelete = null;
    }

    public function render()
    {
        return view('livewire.admin.faq.manage-faq');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function swap($rowIndex1, $rowIndex2)
    {
        $prev_row1 = $this->faqs[$rowIndex1];
        $prev_row2 = $this->faqs[$rowIndex2];

        $this->faqs[$rowIndex2] = $prev_row1;
        $this->faqs[$rowIndex1] = $prev_row2;

        $this->validate();
    }

    public function setItemIndex($index)
    {
        $this->indexToDelete = $index;
    }

    public function addItem()
    {
        $newItem = array('answer' => null, 'question'=>null);
        array_unshift($this->faqs, $newItem);
    }

    public function deleteItem()
    {
        unset($this->faqs[$this->indexToDelete]);
        $this->indexToDelete = null;
    }

    public function save()
    {
        $this->validate();

        Faq::truncate();
        Faq::insert($this->faqs);

        $this->dispatchBrowserEvent('toastr', 'Faqs have been updated successfully!');
    }
}
