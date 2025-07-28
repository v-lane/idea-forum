<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl">
            <x-hero :text="'My Ideas'"/>
            {{--<div class="m-3 bg-blue-400">ADD: + Create a New Idea</div>--}}
            <flux:modal.trigger name="idea-form">
                <flux:button icon="plus" variant="ghost">Create a New Idea</flux:button>
            </flux:modal.trigger>
            <livewire:idea-form />
            <livewire:idea-section :hasIdeaCount="'true'" />
        </main>
    </div>

</x-layouts.app>
