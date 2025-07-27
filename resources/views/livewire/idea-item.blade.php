<li class="list-none
@if($border)
border border-solid
@endif
p-6 border-pink-300 rounded-xl m-6 bg-white">
    <header class="flex justify-between">
        <div>
            @if($singleIdea)
            <h1 class="text-4xl">{{ $ideaTitle }}</h1>
            @else
            <flux:heading size="lg" level="3">{{ $ideaTitle }}</flux:heading>
            @endif
            <flux:text class="text-xs" variant="subtle">{{ $username }}/
                @if($createDate == $editDate)
                {{ $createDate }}
                @else
                 Edited at: {{ $editDate }}
                @endif
            </flux:text>
        </div>
        @if($userId == Auth::id())
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
        {{ $ideaText }}
    </flux:text>
    <footer class="flex">
        {{-- ADD LISTENER/EVENT TO HEART ICON -> TO LIKE POST --}}
        {{-- DECIDE - SVG icons or flux icons --}}
        <div class="flex pe-4 items-center">
            <x-heart-icon/>
            <flux:icon.heart class="text-pink-600"/>
            <flux:text class="ps-1" color="pink">{{ $numLikes }} Likes</flux:text>
        </div>
        <div class="flex items-center">
            <x-comment-icon/>
            <flux:icon.chat-bubble-oval-left class="text-pink-600" />
            <flux:text class="ps-1" color="pink">{{ $numComments }} Comments</flux:textp>
        </div>
    </footer>
</li>
