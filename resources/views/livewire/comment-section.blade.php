<div>
    <h2>[Add New Comment Here]</h2>
    <flux:separator />
        <x-comment-list>
            @foreach($comments as $comment)
                <livewire:comment-item :key="$comment['userId']" :username="$comment['username']" :body="$comment['body']" />
            @endforeach
        </x-comment-list>
</div>
