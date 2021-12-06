<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SellerApplicationStepTwoForm extends Component
{
    public $state = [];

    protected $rules = [
        'state.quality_perspective' => 'required',
        'state.seller_experience' => 'required',
        'state.marketing_understanding' => 'required'
    ];

    protected $messages = [
        'state.quality_perspective' => 'A selection is required.',
        'state.seller_experience' => 'A selection is required.',
        'state.marketing_understanding' => 'A selection is required.'
    ];

    public function updatedState()
    {
        $this->emit('mergeState', $this->state);
    }

    public function submit()
    {
        $this->validate();
        $this->emit('store');
        $this->emit('goToStep', 3);
    }

    public function render()
    {
        return view('livewire.seller-application-step-two-form');
    }
}
