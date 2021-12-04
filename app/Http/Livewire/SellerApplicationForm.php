<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SellerApplicationForm extends Component
{
    public $state;
    public $step = 1;

    protected $listeners = ["goToStep", "mergeState", "store"];

    public function store()
    {
    }

    public function render()
    {
        return view("livewire.seller-application-form");
    }
}
