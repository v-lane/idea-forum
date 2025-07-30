    <x-layouts.app :title="__('Home')">
        <div class="flex items-center justify-center w-full">
            <main class="lg:max-w-6xl">
                <x-hero :text="'Idea Forum'"/>
                <h2 class="text-center text-2xl my-4">Most Liked Ideas</h2>
                <x-spotlight-wrapper />
                <livewire:idea-section :hasHeader="'true'" :$ideas/>
            </main>
        </div>
    </x-layouts.app>
