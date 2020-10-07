<div>
    {{-- The Master doesn't talk, he acts. --}}
    {{ $counter }} <br>
    <input type="text" wire:model="step"> <br>
    <button wire:click="$emit('incrementEmit',{{$step}})">+</button> | <button wire:click="$emit('decrementEmit',{{$step}})">-</button>
          @livewire('hello-world')
</div>
