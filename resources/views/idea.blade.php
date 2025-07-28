<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl">
            <livewire:idea-item
            :key="$idea['id']"
            :ideaId="$idea['id']" :ideaTitle="$idea['title']" :ideaText="$idea['text']"
            :numLikes="count($idea->likes)" :numComments="count($idea->comments)"
            :username="$idea->user->name" :userId="$idea->user_id"
            :createDate="$idea['created_at']" :editDate="$idea['updated_at']"

            :border='true'
            :singleIdea='true'
            />

            <livewire:comment-section />
        </main>
    </div>

</x-layouts.app>
