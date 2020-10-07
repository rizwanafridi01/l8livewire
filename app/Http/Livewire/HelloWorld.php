<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    private $name = "Rizwan";
    public $count = 0;
    protected $listeners=[
        "incrementEmit" => "increment",
        "decrementEmit" => "decrement",
    ];

    public function mount(){

    }
    public function render()
    {
        return view('livewire.hello-world',['name'=> $this->name]);
    }

    public function increment($step=1)
    {
        $this->count+=$step;
    }

    public function decrement($step=1)
    {
        $this->count -=$step;
    }
}
