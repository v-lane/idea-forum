{{-- Add dark grey border around form --}}

<form action="{{ route('idea.store') }}" method="post" class="flex flex-col justify-center items-center w-xl p-6 mx-5 bg-zinc-100 rounded-xl">
    @csrf
    <div>
        <flux:input class="min-w-100 p-2 text-zinc-950 caret-pink-600" type="text" label="Title" />
        @error('title')
            <p class="text-red-600 pb-3">{{ $message }}</p>
        @enderror

        <flux:input class="p-2 text-zinc-950 caret-pink-600" type="textarea" label="Text" />
        @error('text')
            <p class="text-red-600 pb-3">{{ $message }}</p>
        @enderror
    </div>
    <flux:button variant="primary" color="pink" type="submit" class="hover:bg-pink-700">Create</flux:button>
</form>
