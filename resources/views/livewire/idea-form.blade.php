<div class="w-full max-w-xs">
    <flux:modal name="idea-form-{{ $formName }}" class="w-full max-w-4xl">
        <form class="px-8 pt-6 pb-8 mb-4" wire:submit="save">
            <h2 class="text-pink-600 font-bold">{{ $heading }}</h2>
            <div class="mb-4 mt-6">
                <input class="border rounded w-full py-2 px-3 text-zinc-950 leading-tight focus:outline-pink-600 caret-pink-600" type="text" wire:model="title" placeholder="Title...">
                @error('title')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6 mt-6">
                <textarea rows="5" class="border rounded w-full py-2 px-3 text-zinc-950 leading-tight focus:outline-pink-600 caret-pink-600" wire:model="text" placeholder="Write your idea here..."></textarea>
                @error('text')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-start">
                <flux:button type="submit" variant="primary" color="pink" class="hover:bg-pink-700 font-bold py-2 px-4 rounded cursor-pointer">
                    {{ $btnText }}
                </flux:button>
                <flux:modal.close>
                    <flux:button variant="ghost" class="ml-4 cursor-pointer">Cancel</flux:button>
                </flux:modal.close>
            </div>
        </form>
  </flux:modal>
</div>
