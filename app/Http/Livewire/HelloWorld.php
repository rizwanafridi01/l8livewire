<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    private $name = "Rizwan";
    public $count = 0;

    public function mount(Request $request, $count = 1){
        $this->name = "pk";
        $this->count = $request->count ?? $count;
    }
    public function render()
    {
        return view('livewire.hello-world',['name'=> $this->name]);
    }
}
