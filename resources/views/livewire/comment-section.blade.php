<div>
    <livewire:comment-form :$ideaId @saved="refresh" />
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
