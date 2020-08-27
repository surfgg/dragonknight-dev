<nav id="mobile-nav" class="fixed z-50 w-full" x-data="{ drawer: false }" @click.away="drawer = false">
    <div class="flex items-center justify-between w-full px-4 py-2 text-white" style="background-image: url('{{ asset('css/img/darktopo.jpg') }}');">
        <h1 class="text-base"><i class="fas fa-fw fa-dragon"></i></h1>

        <i class="far fa-fw fa-bars" :class="drawer ? 'fa-times' : 'fa-bars'" @click="drawer = !drawer"></i>
    </div>

    <div x-cloak x-show="drawer" class="absolute left-0 w-full text-white bg-gray-800" style="top: 100%;">
        <div class="px-8 py-4 hover:bg-crimson-500" @click="current = 'intro'">Introduction</div>
    </div>
</nav>

<div id="nav-spacer" class="w-full"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let spacer = document.querySelector('#nav-spacer');
        let nav = document.querySelector('#mobile-nav');

        spacer.style.height = nav.clientHeight + 'px';
    });
</script>
