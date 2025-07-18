<div class="mt-4">
    <header class="flex justify-between items-center mx-10 mt-8">
        <h2 class="text-center text-2xl">All Ideas</h2>
        <p class="bg-blue-400">[add search bar here]</p>
    </header>
    <div class="flex justify-center items-center">
        <x-idea-list>
            @foreach($ideas as $idea)
            <livewire:idea-item :key="$idea['ideaId']" :$idea :border='true' />
            @endforeach
        </x-idea-list>
    </div>
</div>
