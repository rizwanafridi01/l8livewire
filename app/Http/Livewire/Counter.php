<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Counter extends Component
{
    public $counter;
    public $step;
    public $hydrate =1;

    public function increment($step)
    {
        $this->counter+= $step;
    }
    public function decrement($step)
    {
        $this->counter-=$step;
    }
    public function mount(Request $request, $steps = 1)
    {
        $this->counter = 0;
        $this->step = $request->steps ?? $steps;
    }
//    public function hydrate()
//    {
//        $this->hydrate++;
//    }
    public function updatingStep()
    {
        $this->hydrate++;
    }
    public function updatedStep()
    {
        $this->hydrate++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
