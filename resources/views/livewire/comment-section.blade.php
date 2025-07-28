<div>
    <form class="flex flex-col gap-3 align-center justify-center m-6">
        <h2 class="text-2xl">Comments</h2>
        <flux:input placeholder="Add a comment"/>
        <footer class="w-25 self-end">
            <x-button>Submit</x-button>
        </footer>
    </form>
    <flux:separator class="mt-6"/>
    <x-comment-list>
        @if (!count($comments))
        <flux:text>
            No comments yet!
        </flux:text>
        @endif
        @foreach($comments as $comment)
            <livewire:comment-item :key="$comment['id']"
            :userId="$comment['user_id']"
            :body="$comment['text']"
            :date="$comment['created_at']" >
        @endforeach
    </x-comment-list>
</div>
