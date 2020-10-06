<div>
    {{-- The Master doesn't talk, he acts. --}}
    <p>Hydrate: {{ $hydrate }}</p>
    {{ $counter }} <br>
    <input wire:keydown.arrow-up="increment({{ $step }})" wire:keydown.arrow-down="decrement({{ $step }})"  type="text" wire:model.lazy="step"> <br>

    <button wire:click="increment({{ $step }})">+</button> | <button wire:click="decrement({{ $step }})">-</button>
</div>
