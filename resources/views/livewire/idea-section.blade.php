<div class="mt-4">
    <flux:modal.trigger name="idea-form">
        <flux:button icon="plus" variant="ghost" class="m-3 cursor-pointer">Create a New Idea</flux:button>
    </flux:modal.trigger>
    <livewire:idea-form @saved="refresh" />
    @if($hasHeader)
        <header class="flex justify-between items-center mx-10 mt-8">
            <h2 class="text-center text-2xl">All Ideas</h2>
            <p class="bg-blue-400">[add search bar here]</p>
        </header>
    @endif
    @if($hasIdeaCount)
        <p class="ml-14 mt-10 text-xl">{{ $ideaCount }} Ideas</p>
    @endif
    <div class="flex justify-center items-center w-full">
        <x-idea-list>
            @foreach($ideas as $idea)
            <livewire:idea-item :key="$idea['id']" :idea=$idea
            :ideaId="$idea['id']"
            :border='true' />
            @endforeach
        </x-idea-list>
    </div>
</div>

