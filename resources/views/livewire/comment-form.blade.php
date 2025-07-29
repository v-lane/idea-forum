<form wire:submit="save" class="flex flex-col gap-3 align-center justify-center m-6">
    <h2 class="text-2xl">Comments</h2>
    <textarea class="border rounded w-full py-2 px-3 text-zinc-950 leading-tight focus:outline-pink-600 caret-pink-600" type="text" wire:model="commentText" placeholder="Add a comment..."></textarea>
    @error('commentText')
        <p class="text-red-600">{{ $message }}</p>
    @enderror
    <footer class="w-25 self-end">
        <flux:button type="submit" variant="primary" color="pink" class="hover:bg-pink-700 rounded cursor-pointer">
            Submit
        </flux:button>
    </footer>
</form>
