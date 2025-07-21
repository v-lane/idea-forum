<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="flex-row w-full lg:max-w-6xl">
            <x-hero :text="'My Ideas'"/>
            <div class="m-3 bg-blue-400">ADD: + Create a New Idea</div>
            <livewire:idea-section :hasIdeaCount="'true'" />
        </main>
    </div>

</x-layouts.app>
