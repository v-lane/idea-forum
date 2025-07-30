<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl w-full">
            <livewire:idea-item
            :key="$idea['id']" :idea=$idea
            :ideaId="$idea['id']"

            :border='true'
            :singleIdea='true'
            />
            <livewire:comment-section :comments="$idea->comments"/>
        </main>
    </div>

</x-layouts.app>
