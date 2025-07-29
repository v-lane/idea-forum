<li  class="list-none p-6 border-pink-300 rounded-xl m-6 bg-white
@if($border)
border border-solid
@endif
@if(!$singleIdea)
cursor-pointer
@endif
"
@if(!$singleIdea)
wire:click="toIdea"
@endif

>
    <header class="flex justify-between">
        <div>
            @if($singleIdea)
            <h1 class="text-4xl pb-1">{{ $ideaTitle }}</h1>
            @else
            <flux:heading size="lg" level="3">{{ $ideaTitle }}</flux:heading>
            @endif
            <flux:text class="text-xs" variant="subtle">{{ $username }} -
                @if($createDate == $editDate)
                {{ $createDate->format('F j, Y @ g:i a') }}
                @else
                 Edited at: {{ $editDate->format('F j, Y @ g:i a') }}
                @endif
            </flux:text>
        </div>
        @if($userId == Auth::id())
        {{-- ADD LINK/EVENT TO EDIT/DELETE --}}
        <div class="flex">
            <div>
               <flux:icon.pencil-square class="text-zinc-700 cursor-pointer"/>
            </div>
            <div>
                <flux:icon.trash class="text-zinc-700 cursor-pointer"/>
            </div>
        </div>
        @endif
    </header>
    <flux:text class="mt-2 mb-4">
        {{ $ideaText }}
        @if (!$singleIdea)
            ...
        @endif
    </flux:text>
    <footer class="flex">
        {{-- ADD LISTENER/EVENT TO HEART ICON -> TO LIKE POST --}}
        <div class="flex pe-4 items-center">
            <flux:icon.heart class="text-pink-600"/>
            <flux:text class="ps-1" color="pink">{{ $numLikes }} Likes</flux:text>
        </div>
        <div class="flex items-center">
            <flux:icon.chat-bubble-oval-left class="text-pink-600" />
            <flux:text class="ps-1" color="pink">{{ $numComments }} Comments</flux:textp>
        </div>
    </footer>
</li>
