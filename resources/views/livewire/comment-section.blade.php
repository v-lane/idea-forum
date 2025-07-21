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
        @foreach($comments as $comment)
            <livewire:comment-item :key="$comment['userId']" :username="$comment['username']" :body="$comment['body']" :date="$comment['date']" >
        @endforeach
    </x-comment-list>
</div>
