<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl w-full">
            <x-hero :text="'My Ideas'"/>
            <livewire:idea-section :$ideas :hasIdeaCount="'true'" />
        </main>
    </div>

</x-layouts.app>
