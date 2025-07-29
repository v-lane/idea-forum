<flux:header class="border-b border-zinc-100 bg-linear-to-r from-pink-300 via-pink-50 via-50% via-zinc-50 via-55% via-yellow-50 via-65% to-yellow-100">

            <a href="{{ route('home') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0" wire:navigate>
                <x-app-logo />
            </a>

            <flux:spacer />

            <nav class="flex items-center justify-end gap-4">
                <a href="{{ route('home') }}" class="inline-block px-2 py-1.5 text-zinc-700 border border-transparent hover:border-zinc-400 hover:text-zinc-700 rounded-sm text-sm leading-normal">
                    Home
                </a>
                <flux:separator vertical class="my-2"/>
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ route('login') }}" class="inline-block px-2 py-1.5 text-zinc-700 border border-transparent hover:border-zinc-400 hover:text-zinc-700 rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                        <flux:dropdown position="top" align="end">
                            <flux:profile
                                circle
                                avatar:color="auto"
                                avatar:color:seed="{{ auth()->user()->id }}"
                                avatar:name="{{ auth()->user()->username }}"
                                class="cursor-pointer"
                            />

                            <flux:menu>
                                <flux:menu.radio.group>
                                    <div class="p-0 text-sm font-normal">
                                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                            <flux:avatar
                                            name="{{ auth()->user()->username }}"
                                            color="auto"
                                            color:seed="{{ auth()->user()->id }}"
                                            />

                                            <div class="grid flex-1 text-start text-sm leading-tight">
                                                <span class="truncate font-semibold">{{ auth()->user()->username }}</span>
                                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </flux:menu.radio.group>

                                <flux:menu.separator />

                                <flux:menu.radio.group>
                                    <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                                </flux:menu.radio.group>

                                <flux:menu.separator />

                                <form method="POST" action="{{ route('logout') }}" class="w-full">
                                    @csrf
                                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                        {{ __('Log Out') }}
                                    </flux:menu.item>
                                </form>
                            </flux:menu>
                        </flux:dropdown>

                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-zinc-700 border border-transparent hover:border-zinc-400 hover:text-zinc-700 rounded-sm text-sm leading-normal"
                        >
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-2 py-1.5 text-zinc-700 border border-transparent hover:border-zinc-400 hover:text-zinc-700 rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif


        </flux:header>
