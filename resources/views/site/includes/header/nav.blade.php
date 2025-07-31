<header class="bg-black  w-full z-50" >
    <div class="max-w-7xl h-[64px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="/">
                <img src="{{ Vite::asset('resources/assets/images/logo.webp') }}" alt="Logo" class="h-15">
            </a>

            <nav class="hidden md:flex space-x-8">
                <a href="#sobre" class="relative group text-white">
                    Sobre
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#trabalhos" class="relative group text-white">
                    Trabalhos
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#contato" class="relative group text-white">
                    Contato
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <button id="menu-toggle" class="cursor-pointer md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="fixed cursor-pointer inset-0 bg-black text-white flex-col justify-center items-center space-y-6 text-xl transform -translate-y-full opacity-0 transition-all duration-500 ease-in-out z-40 hidden">
        <button id="menu-close" class="absolute top-6 right-6 text-white text-2xl cursor-pointer">
            ✕
        </button>
        <a href="#sobre" class="hover:underline underline-offset-4">Sobre</a>
        <a href="#trabalhos" class="hover:underline underline-offset-4">Trabalhos</a>
        <a href="#contato" class="hover:underline underline-offset-4">Contato</a>
    </div>
</header>


<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const close = document.getElementById('menu-close');

    toggle.addEventListener('click', () => {
        menu.classList.remove('hidden');
        requestAnimationFrame(() => {
            menu.classList.add('flex');
            menu.classList.remove('-translate-y-full', 'opacity-0');
            menu.classList.add('translate-y-0', 'opacity-100');
        });
    });

    close.addEventListener('click', () => {
        menu.classList.remove('translate-y-0', 'opacity-100');
        menu.classList.add('-translate-y-full', 'opacity-0');
        setTimeout(() => {
            menu.classList.remove('flex');
            menu.classList.add('hidden');
        }, 500);
    });
</script>
