<search>
        {{-- <input type="search"
            class="form-control sm:w-sm md:w-lg lg:w-2xl p-2 border rounded text-zinc-950 leading-tight focus:outline-pink-600 caret-pink-600
                ps-[25px]"
            style="background:url('https://static.thenounproject.com/png/magnifying-glass-icon-7932403-512.png') no-repeat left; background-size:20px"
            name="search" placeholder="Search..."
            wire:model.live="search"
        > --}}

        <div class="col flex place-items-center border-2 p-1 ps-2 rounded-lg focus-within:border-pink-600">
            <flux:icon.magnifying-glass class="size-5 text-zinc-400"/>

            <input type="search"
                class="form-control sm:w-xs md:w-md lg:w-2xl m-1 ps-2 rounded-lg text-zinc-950 leading-tight focus:outline-white caret-pink-600"
                name="search" placeholder="Search..."
                wire:model.live="search"
            >
        </div>
        {{-- <flux:input type="search"
            class="form-control sm:w-sm md:w-lg lg:w-2xl p-2 rounded text-zinc-950 leading-tight"
            class:input="focus:border-pink-600 caret-pink-600"
            placeholder="Search..."
            wire:model.live="search"
            icon="magnifying-glass"
        /> --}}
</search>
