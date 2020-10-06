<div>
    {{-- The Master doesn't talk, he acts. --}}
    {{ $counter }} <br>
    <input wire:keydown.arrow-up="increment" wire:keydown.arrow-down="decrement"  type="text" wire:model.lazy="step"> <br>

    <button wire:click="increment">+</button> | <button wire:click="decrement">-</button>
</div>
