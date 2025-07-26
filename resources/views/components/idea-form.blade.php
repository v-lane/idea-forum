{{-- Delete this --}}

<form action="{{ route('idea.store') }}" method="post" class="flex flex-col justify-center items-center w-xl p-6 mx-5 bg-zinc-100 rounded-xl">
    @csrf
    <div>
        <flux:field>
            <flux:label>Title</flux:label>
            <flux:input class="min-w-100 p-2 text-zinc-950 caret-pink-600" type="text" name="title" value="{{old('title')}}" />
        </flux:field>
        @error('title')
            <p class="text-red-600 pb-3">{{ $message }}</p>
        @enderror

        <flux:field>
            <flux:label>Text</flux:label>
            <flux:input class="p-2 text-zinc-950 caret-pink-600" name="words" value="{{old('words')}}" />
        </flux:field>

        @error('words')
            <p class="text-red-600 pb-3">{{ $message }}</p>
        @enderror
    </div>
    <flux:button variant="primary" color="pink" type="submit" class="hover:bg-pink-700 m-3">Create</flux:button>
</form>
