<div>
    <x-idea-list>
        @foreach($ideas as $idea)
            <livewire:idea-item :key="$idea['ideaId']" :$idea />
        @endforeach
    </x-idea-list>
</div>
