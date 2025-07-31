<div>
    <flux:modal name="delete-alert-{{ $formId }}">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete idea?</flux:heading>
                <flux:text class="mt-2 mb-3">
                    <p>Are you sure you want to delete your idea?</p>
                </flux:text>
            </div>
            <div class="flex gap-2">
                <flux:spacer />
                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>
                <flux:button variant="danger" wire:click="destroy">Delete</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
