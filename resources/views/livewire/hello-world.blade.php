<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h3>Because she competes with no one, {{ $name }}</h3>
    <p><input type="text" wire:model.rebounce.1000ms="message1"></p>
    <p><input type="text" wire:model.lazy="message2"></p>

    {{ $message1 }}

    {{ $message2 }}


</div>
