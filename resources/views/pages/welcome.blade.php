<x-app-layout>
    <div x-data="{ current: 'intro' }">
        <div class="flex flex-col min-h-screen lg:flex-row">
            <div class="lg:hidden">
                @include('components.nav.mobile-nav')
            </div>

            @include('components.nav.desktop-nav')

            <main class="w-full">
                <div x-cloak x-show="current == 'intro'">
                    @include('partials.welcome.intro')
                </div>

                <div x-cloak x-show="current == 'install'">
                    Howdy, install!
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
