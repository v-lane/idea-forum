<li class="border border-solid border-zinc-300 p-6 rounded-xl mx-4 mb-6">
    <header class="flex justify-between items-center">
        <div class="flex flex-column items-center ">
            <flux:avatar circle name="{{ $username }}" color="auto" color:seed="{{ $userId }}" />
            <flux:heading class="ps-2 text-pink-600">{{ $username }}</flux:heading>
        </div>
        <flux:text class="text-xs" variant="subtle">{{ $date->format('F j, Y @ g:i a') }}</flux:text>
    </header>
    <flux:text class="mt-2 mb-4">
        <p>{{ $body }}</p>
    </flux:text>
</li>
