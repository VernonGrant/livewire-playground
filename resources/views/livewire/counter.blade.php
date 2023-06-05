<div>
    <div class="w-full max-w-md mx-auto">
        <div class="text-center bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="pb-8 text-sm font-bold uppercase">Counter</h1>
            <div class="mb-8 font-mono font-bold text-3xl px-5 py-2 rounded-lg bg-slate-200">
                {{ $count }}
            </div>
            <button class="btn btn-blue" wire:click="decrement">Decrement</button>
            <button class="btn btn-green mb-2" wire:click="increment">Increment</button>
        </div>
    </div>
</div>
