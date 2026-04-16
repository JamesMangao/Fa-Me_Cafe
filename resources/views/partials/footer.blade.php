<footer class="bg-[#080500] border-t border-white/[0.08] py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-3 gap-10 mb-12">
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <x-icon name="coffee" class="text-amber-400 w-5 h-5" />
                    <span class="text-white font-bold text-lg">Fa-Me Café</span>
                </div>
                <p class="text-white/40 text-sm leading-relaxed mb-5">
                    Your neighborhood tambayan in Pacita. Rich coffee, authentic Indonesian cuisine, and good vibes — open until 2 AM.
                </p>
                <div class="flex gap-3">
                    <a href="https://www.facebook.com/famecafepacita/" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full bg-white/5 hover:bg-amber-500/20 border border-white/10 hover:border-amber-500/40 flex items-center justify-center text-white/50 hover:text-amber-400 transition-all">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/famecafepacita/" target="_blank" rel="noopener noreferrer"
                       class="w-9 h-9 rounded-full bg-white/5 hover:bg-amber-500/20 border border-white/10 hover:border-amber-500/40 flex items-center justify-center text-white/50 hover:text-amber-400 transition-all">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Quick Links</h4>
                <ul class="space-y-2.5">
                    @foreach(['About','Menu','Reviews','Location'] as $link)
                    <li>
                        <a href="#{{ strtolower($link) }}" class="text-white/40 hover:text-amber-400 text-sm transition-colors">
                            {{ $link }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Contact</h4>
                <div class="space-y-3">
                    <div class="flex items-start gap-2.5 text-sm text-white/40">
                        <svg class="w-4 h-4 text-amber-400 shrink-0 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                        </svg>
                        <span>72 Pacita Ave, Pacita 1<br />San Pedro, 4023 Laguna</span>
                    </div>
                    <div class="flex items-center gap-2.5 text-sm text-white/40">
                        <svg class="w-4 h-4 text-amber-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span>Daily &middot; 10:00 AM – 2:00 AM</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/[0.08] pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-sm text-white/25">
            <span>&copy; {{ date('Y') }} Fa-Me Café Pacita. All rights reserved.</span>
            <span>72 Pacita Ave, San Pedro, Laguna</span>
        </div>
    </div>
</footer>
