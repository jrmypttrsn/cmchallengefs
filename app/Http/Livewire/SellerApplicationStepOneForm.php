<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SellerApplicationStepOneForm extends Component
{
    public $state = [];

    protected $rules = [
        'state.first_name' => 'required',
        'state.last_name' => 'required',
        'state.shop_category' => 'required'
    ];

    protected $messages = [
        'state.first_name.required' => 'A first name is required.',
        'state.last_name.required' => 'A last name is required.',
        'state.shop_category.required' => 'A shop category is required.'
    ];

    public function updatedState()
    {
        $this->emit('mergeState', $this->state);
    }

    public function submit()
    {
        $this->validate();
        $this->emit('goToStep', 2);
    }

    public function render()
    {
        return view('livewire.seller-application-step-one-form');
    }
}
