<div>
    <h2 class="text-2xl font-bold mb-4">Contador Livewire</h2>
    
    <div class="flex items-center space-x-4">
        <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
            -
        </button>
        
        <span class="text-xl">{{ $count }}</span>
        
        <button wire:click="increment" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
            +
        </button>
    </div>
</div> 