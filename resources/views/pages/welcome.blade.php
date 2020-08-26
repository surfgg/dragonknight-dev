<x-app-layout>
    <div x-data="{ current: 'intro' }">
        <div class="flex min-h-screen">
            <nav class="w-1/5 text-white bg-bg-800" style="background-image: url('{{ asset('css/img/darktopo.jpg') }}');">
                <div class="sticky top-0 py-4">
                    <h1 class="px-8 text-4xl"><i class="fas fa-fw fa-dragon"></i> DK</h1>
                    <h3 class="px-8">v1.1.1</h3>

                    <div class="py-4">
                        <div class="px-8 py-4 hover:bg-crimson-500" @click="current = 'intro'">Introduction</div>
                        {{-- <div class="px-8 py-4 hover:bg-crimson-500" @click="current = 'install'">Installation</div> --}}
                    </div>
                </div>
            </nav>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            OverlayScrollbars(document.querySelectorAll('body'), { className: 'os-theme-dark' });
        });
    </script>
</x-app-layout>
