<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
       <div class="w-50"><x-button :text="'Create'" /></div>
        <x-button :text="'Cancel'" :color="'zinc'" />
        <livewire:comment-section/>
    </div>
</x-layouts.app>
