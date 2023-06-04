<div>
    {{-- In work, do what you enjoy. --}}
    Counter Component:
    <div id="counter">
        <span>{{ $count }}</span>
        <button class="btn"wire:click="increment">Increment</button>
        <button class="btn"wire:click="decrement">Decrement</button>
    </div>
</div>
