<li class="border border-solid border-zinc-300 p-6 rounded-xl" style="margin:1.5rem 5rem;">
    <div class="flex flex-column items-center ">
        <flux:avatar circle name="{{ $username }}" color="auto" color:seed="{{ $userId }}" />
        <flux:heading class="ps-2 text-pink-600">{{ $username }}</flux:heading>
    </div>
    <flux:text class="mt-2 mb-4">
        <p>{{ $body }}</p>
    </flux:text>
</li>
