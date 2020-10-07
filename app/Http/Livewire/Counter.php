<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Counter extends Component
{
    public $counter;
    public $step;

    public function mount()
    {
        $this->counter = 0;
        $this->step = 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
