<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl w-full">
            {{-- <livewire:idea-item
            :key="$idea['id']"
            :ideaId="$idea['id']" :ideaTitle="$idea['title']" :ideaText="$idea['text']"
            :numLikes="count($idea->likes)" :numComments="count($idea->comments)"
            :username="$idea->user->username" :userId="$idea->user_id"
            :createDate="$idea['created_at']" :editDate="$idea['updated_at']"

            :border='true'
            :singleIdea='true'
            /> --}}
            <livewire:idea-section :hasHeader="'true'" :isSingleIdea="true" :$idea/>
            <livewire:comment-section :ideaId="$idea['id']" :$comments />
        </main>
    </div>

</x-layouts.app>
