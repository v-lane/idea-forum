<li class="border border-solid p-6 border-pink-300 rounded-xl mx-4 mb-6">
    <header class="flex justify-between">
        <div>
            <flux:heading size="lg">{{ $idea['title'] }}</flux:heading>
            <flux:text class="text-xs" variant="subtle">{{ $idea['username'] }} / {{ $idea['date'] }}</flux:text>
        </div>
        @if($idea['ideaId'] == 3)
        {{-- UPDATE IF LOGIC -> if user logged in == userId, show this --}}
        {{-- ADD LINK/EVENT TO EDIT/DELETE --}}
        {{-- DECIDE - SVG icons or flux icons --}}
        <div class="flex">
            <div >
                <x-edit-icon/>
            </div>
            <div class="ps-2 pe-6">
                <x-delete-icon/>
            </div>
            <div>
               <flux:icon.pencil-square class="text-zinc-700"/>
            </div>
            <div class="text-zinc-700">
                <flux:icon.trash />
            </div>
        </div>
        @endif
    </header>
    <flux:text class="mt-2 mb-4">
        {{ $idea['body'] }}
    </flux:text>
    <footer class="flex">
        {{-- ADD LISTENER/EVENT TO HEART ICON -> TO LIKE POST --}}
        {{-- DECIDE - SVG icons or flux icons --}}
        <div class="flex pe-4 items-center">
            <x-heart-icon/>
            <flux:icon.heart class="text-pink-600"/>
            <flux:text class="ps-1" color="pink">{{ $idea['numLikes'] }} Likes</flux:text>
        </div>
        <div class="flex items-center">
            <x-comment-icon/>
            <flux:icon.chat-bubble-oval-left class="text-pink-600" />
            <flux:text class="ps-1" color="pink">{{ $idea['numComments']}} Comments</flux:textp>
        </div>
    </footer>
</li>
