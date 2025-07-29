<div class="mt-4">
    @auth
        <flux:modal.trigger name="idea-form-create">
            <flux:button icon="plus" variant="ghost" class="m-3 cursor-pointer">Create a New Idea</flux:button>
        </flux:modal.trigger>
        <livewire:idea-form @saved="refresh" :heading="'Create a New Idea'" :formName="'create'" :btnText="'Create'" />
    @endauth

    @if($hasHeader)
        <header class="flex justify-between items-center mx-10 mt-8">
            <h2 class="text-center text-2xl">All Ideas</h2>
            <livewire:search wire:model.live="search"/>
        </header>
    @endif
    @if($hasIdeaCount && count($ideas) > 0)
        <p class="ml-14 mt-10 text-xl">{{ $ideaCount }} Ideas</p>
    @endif
    <div class="flex justify-center items-center w-full">
        <x-idea-list>
            @if (!count($ideas))
                <flux:separator class="my-6"/>
                <flux:text>
                    No ideas yet!
                </flux:text>
            @endif
            @foreach($ideas as $idea)
            <livewire:idea-item :key="$idea['id']"
            :ideaId="$idea['id']" :ideaTitle="$idea['title']" :ideaText="$idea['text']"
            :numLikes="count($idea->likes)" :numComments="count($idea->comments)"
            :username="$idea->user->username" :userId="$idea->user_id"
            :createDate="$idea['created_at']" :editDate="$idea['updated_at']"
            :border='true'
            @refresh="refresh" />
            @endforeach
        </x-idea-list>
    </div>
</div>

