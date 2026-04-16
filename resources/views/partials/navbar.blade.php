<nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <svg class="text-amber-400 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8zM6 1v3M10 1v3M14 1v3"/>
            </svg>
            <span class="text-white font-bold text-xl tracking-wide">Fa-Me Café</span>
        </a>

        <ul class="hidden md:flex items-center gap-8">
            @foreach(['About','Menu','Reviews','Location'] as $link)
            <li>
                <a href="#{{ strtolower($link) }}" class="text-amber-100/80 hover:text-amber-300 transition-colors text-sm font-medium tracking-wider uppercase">
                    {{ $link }}
                </a>
            </li>
            @endforeach
            <li>
                <a href="#location" class="bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold px-5 py-2 rounded-full transition-all hover:shadow-lg hover:shadow-amber-500/30">
                    Visit Us
                </a>
            </li>
        </ul>

        <button id="mobile-menu-btn" class="md:hidden text-white" aria-label="Toggle menu">
            <svg id="icon-menu" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close" class="w-6 h-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-[#1a0f00]/98 px-6 pb-6 space-y-4">
        @foreach(['About','Menu','Reviews','Location'] as $link)
        <a href="#{{ strtolower($link) }}" class="mobile-nav-link block text-amber-100/80 hover:text-amber-300 text-sm font-medium tracking-wider uppercase py-2 border-b border-amber-900/30">
            {{ $link }}
        </a>
        @endforeach
        <a href="#location" class="mobile-nav-link inline-block bg-amber-500 hover:bg-amber-400 text-white text-sm font-semibold px-5 py-2 rounded-full mt-2 transition-all">
            Visit Us
        </a>
    </div>
</nav>
