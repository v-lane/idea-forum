<div class="w-full max-w-4xl h-auto p-6">
    <flux:modal name="idea-form" class="">
        <form>
            <div>
                <flux:heading size="lg">Create a New Idea</flux:heading>
            </div>

            <div>
                <label>Idea Title</label>
                <input type="text" class="" wire:model="title">
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <textarea class="" wire:model="text" placeholder="Write your idea here..."></textarea>
                @error('text')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <flux:button variant="primary" color="pink" class="hover:bg-pink-700"></flux:button>
        </form>
    </flux:modal>
</div>