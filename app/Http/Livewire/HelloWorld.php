<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    private $name = "Rizwan";
    public $message1 = "message placeholder1";
    public $message2 = "message placeholder2";
    public function mount(){
        $this->name = "pk";
    }
    public function render()
    {
        return view('livewire.hello-world',['name'=> $this->name]);
    }
}
