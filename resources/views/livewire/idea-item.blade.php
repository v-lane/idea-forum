<li  class="list-none p-6 border-pink-300 rounded-xl m-6 bg-white
@if($border)
border border-solid
@endif
@if(!$singleIdea)
cursor-pointer
@endif
"
@if(!$singleIdea)
    wire:click.self="toIdea"
@endif

>
    <header class="flex justify-between">
        <div @if(!$singleIdea) wire:click.self="toIdea" @endif>
            @if($singleIdea)
            <h1 class="text-4xl pb-1">{{ $ideaTitle }}</h1>
               <flux:text class="text-xs" variant="subtle">{{ $username }} -
                @if($createDate == $editDate)
                {{ $createDate->format('F j, Y @ g:i a') }}
                @else
                {{ $editDate->format('F j, Y @ g:i a') }} (edited)
                @endif
            </flux:text>
            @else
            <flux:heading wire:click.self="toIdea" size="lg" level="3">{{ $ideaTitle }}</flux:heading>
              <flux:text wire:click.self="toIdea" class="text-xs" variant="subtle">{{ $username }} -
                @if($createDate == $editDate)
                {{ $createDate->format('F j, Y @ g:i a') }}
                @else
                {{ $editDate->format('F j, Y @ g:i a') }} (edited)
                @endif
            </flux:text>
            @endif
        </div>
        @if($userId == Auth::id())
        <div class="flex">
            <div>
                <flux:modal.trigger name="idea-form-{{ $ideaId }}">
                    <flux:icon.pencil-square class="text-zinc-700 cursor-pointer"/>
                </flux:modal.trigger>
                <livewire:idea-form @saved="refresh" :key="$ideaId" :id="$ideaId" :title="$ideaTitle" :text="$ideaText" :heading="'Edit Your Idea'" :formName="$ideaId" :btnText="'Save'"/>

            </div>
            <div>
                <flux:modal.trigger name="delete-alert-{{ $ideaId }}">
                    <flux:icon.trash class="text-zinc-700 cursor-pointer"/>
                </flux:modal.trigger>
                <livewire:delete-alert :key="$ideaId" :id="$ideaId" :formId="$ideaId" :$singleIdea @deleted="refresh" />
            </div>
        </div>
        @endif
    </header>
    @if(!$singleIdea)
    <flux:text wire:click.self="toIdea" class="mt-2 mb-4">
        {{ $ideaText }}
        @if (!$singleIdea)
            ...
        @endif
    </flux:text>
    @else
        <flux:text class="mt-2 mb-4">
        {{ $ideaText }}
        @if (!$singleIdea)
            ...
        @endif
    </flux:text>
    @endif
    <footer class="flex">
        <div class="flex pe-4 items-center">
            @if($userLiked)
                <flux:icon.heart variant="solid" class="text-pink-600"/>
            @else
                <flux:icon.heart wire:click="likeIdea" class="text-pink-600 cursor-pointer"/>
            @endif
            <flux:text class="ps-1" color="pink">{{ $numLikes }} Likes</flux:text>
        </div>
        <div @if(!$singleIdea) wire:click.self="toIdea" @endif class="flex items-center">
            @if($userCommented)
                <flux:icon.chat-bubble-oval-left variant="solid" class="text-pink-600" />
            @else
                <flux:icon.chat-bubble-oval-left class="text-pink-600" />
            @endif
            <flux:text class="ps-1" color="pink">{{ $numComments }} Comments</flux:textp>
        </div>
    </footer>
</li>
