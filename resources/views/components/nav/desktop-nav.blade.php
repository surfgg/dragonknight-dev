<nav class="hidden w-1/5 text-white lg:block" style="background-image: url('{{ asset('css/img/darktopo.jpg') }}'); min-width: 300px;">
    <div class="sticky top-0 py-4">
        <h1 class="px-8 text-4xl"><i class="fas fa-fw fa-dragon"></i> DK</h1>
        <h3 class="px-8">v1.1.1</h3>

        <div class="py-4">
            <div class="px-8 py-4 hover:bg-crimson-500" @click="current = 'intro'">Introduction</div>
            {{-- <div class="px-8 py-4 hover:bg-crimson-500" @click="current = 'install'">Installation</div> --}}
        </div>
    </div>
</nav>
