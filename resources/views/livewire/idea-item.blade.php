@if(isset($idea)) 
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
            <h1 class="text-4xl pb-1">{{ $idea['title'] }}</h1>
            @else
            <flux:heading size="lg" level="3">{{ $idea['title'] }}</flux:heading>
            @endif
            <flux:text class="text-xs" variant="subtle">{{ $idea->user->username }}/
                @if($idea['created_at'] == $idea['updated_at'])
                {{ $idea['created_at'] }}
                @else
                 Edited at: {{ $idea['updated_at'] }}
                @endif
            </flux:text>
        </div>
        @if($idea->user_id == Auth::id())
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
        @if($shortText)
            {{ $idea['text'] }}
        @else
            {{ substr($idea['text'], 0, 125) . '...' }}
        
        @endif
    </flux:text>
    <footer class="flex">
        {{-- ADD LISTENER/EVENT TO HEART ICON -> TO LIKE POST --}}
        <div class="flex pe-4 items-center">
            <flux:icon.heart class="text-pink-600"/>
            <flux:text class="ps-1" color="pink">{{ count($idea->likes) }} Likes</flux:text>
        </div>
        <div class="flex items-center">
            <flux:icon.chat-bubble-oval-left class="text-pink-600" />
            <flux:text class="ps-1" color="pink">{{ count($idea->comments) }} Comments</flux:textp>
        </div>
    </footer>
</li>
@endif