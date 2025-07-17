<li class="border border-solid p-6 rounded-xl" style="margin:1.5rem 5rem; border-color: oklch(82.3% 0.12 346.018);">
    <header class="flex justify-between">
        <div>
            <flux:heading size="lg">{{ $idea['title'] }}</flux:heading>
            <flux:text class="text-xs" variant="subtle">{{ $idea['username'] }} / {{ $idea['date'] }}</flux:text>
        </div>
        @if($idea['ideaId'] == 3)
        {{-- UPDATE IF LOGIC -> if user logged in == userId, show this --}}
        {{-- ADD LINK/EVENT TO EDIT/DELETE --}}
        <div class="flex">
            <div>
                <x-edit-icon/>
            </div>
            <div class="ps-4">
                <x-delete-icon/>
            </div>
        </div>
        @endif
    </header>
    <flux:text class="mt-2 mb-4">
        {{ $idea['body'] }}
    </flux:text>
    <footer class="flex">
        {{-- ADD LISTENER/EVENT TO HEART ICON -> TO LIKE POST --}}
        <div class="flex pe-4 items-center">
            <x-heart-icon/>
            <flux:text class="ps-1" color="pink">{{ $idea['numLikes'] }} Likes</flux:text>
        </div>
        <div class="flex items-center">
            <x-comment-icon/>
            <flux:text class="ps-1" color="pink">{{ $idea['numComments']}} Comments</flux:textp>
        </div>
    </footer>
</li>
