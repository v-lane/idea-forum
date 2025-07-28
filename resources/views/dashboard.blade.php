<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl w-full">
            <x-hero :text="'My Ideas'"/>
            <flux:modal.trigger name="idea-form">
                <flux:button icon="plus" variant="ghost" class="m-3 cursor-pointer">Create a New Idea</flux:button>
            </flux:modal.trigger>
            <livewire:idea-form />
            <livewire:idea-section :hasIdeaCount="'true'" />
        </main>
    </div>

</x-layouts.app>
