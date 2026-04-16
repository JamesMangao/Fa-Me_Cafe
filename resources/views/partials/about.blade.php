@php
$features = [
    ['icon' => 'moon',          'title' => 'Late Night Spot',      'desc' => 'Open until 2 AM — perfect for night owls and late-night hangouts.'],
    ['icon' => 'utensils',      'title' => 'Authentic Indonesian', 'desc' => 'Chef-crafted rendang and martabak manis with genuine Indonesian flavors.'],
    ['icon' => 'users',         'title' => 'Barkada-Friendly',     'desc' => 'Spacious indoor and al fresco seating — ideal for groups and family gatherings.'],
    ['icon' => 'parking',       'title' => 'Free Parking',         'desc' => 'Plenty of free parking space so you can relax without the hassle.'],
    ['icon' => 'credit-card',   'title' => 'QR Payments',          'desc' => 'Contactless and QR payment options available for your convenience.'],
    ['icon' => 'wifi',          'title' => 'Cozy Atmosphere',      'desc' => 'A warm, aesthetic vibe that makes every visit feel like a retreat.'],
];

$icons = [
    'moon'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>',
    'utensils'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>',
    'users'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path stroke-linecap="round" stroke-linejoin="round" d="M23 21v-2a4 4 0 0 0-3-3.87"/><path stroke-linecap="round" stroke-linejoin="round" d="M16 3.13a4 4 0 0 1 0 7.75"/>',
    'parking'     => '<rect x="3" y="3" width="18" height="18" rx="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7h4a3 3 0 0 1 0 6H9"/>',
    'credit-card' => '<rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
    'wifi'        => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 12.55a11 11 0 0 1 14.08 0"/><path stroke-linecap="round" stroke-linejoin="round" d="M1.42 9a16 16 0 0 1 21.16 0"/><path stroke-linecap="round" stroke-linejoin="round" d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/>',
];
@endphp

<section id="about" class="bg-[#0d0700] py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
            <div>
                <span class="text-amber-500 text-sm font-semibold tracking-widest uppercase">Our Story</span>
                <h2 class="text-white text-4xl md:text-5xl font-bold mt-3 mb-6 leading-tight">
                    Where Coffee Meets<br /><span class="text-amber-400">Community</span>
                </h2>
                <p class="text-white/60 text-lg leading-relaxed mb-5">
                    Nestled in the heart of Pacita, San Pedro, Fa-Me Café is more than just a coffee shop — it's a gathering place. Born from a love of rich brews and authentic cuisine, we bring together the best of artisan coffee craft and Indonesian culinary tradition.
                </p>
                <p class="text-white/60 text-lg leading-relaxed mb-8">
                    Whether you're catching up with friends, working late into the night, or simply craving a perfectly crafted frappuccino, Fa-Me is your home away from home. With our doors open until 2 AM, we're always here when you need us most.
                </p>
                <div class="flex gap-10">
                    <div>
                        <div class="text-amber-400 text-3xl font-bold">4.1&#9733;</div>
                        <div class="text-white/50 text-sm mt-1">Google Rating</div>
                    </div>
                    <div>
                        <div class="text-amber-400 text-3xl font-bold">&#8369;500</div>
                        <div class="text-white/50 text-sm mt-1">Max per Person</div>
                    </div>
                    <div>
                        <div class="text-amber-400 text-3xl font-bold">2 AM</div>
                        <div class="text-white/50 text-sm mt-1">Closing Time</div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <img
                    src="{{ asset('images/fame-cafe-interior.png') }}"
                    alt="Fa-Me Café interior"
                    class="rounded-2xl w-full h-80 object-cover"
                />
                <div class="absolute -bottom-6 -left-6 w-40 h-40 rounded-2xl overflow-hidden border-4 border-[#0d0700]">
                    <img
                        src="{{ asset('images/fame-cafe-coffee.png') }}"
                        alt="Coffee"
                        class="w-full h-full object-cover"
                    />
                </div>
                <div class="absolute -top-4 -right-4 bg-amber-500 text-white rounded-2xl px-4 py-3 text-sm font-semibold shadow-xl">
                    Dine-in &amp; Takeout
                </div>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($features as $feature)
            <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-6 hover:border-amber-500/30 hover:bg-amber-500/5 transition-all group">
                <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center mb-4 group-hover:bg-amber-500/20 transition-colors">
                    <svg class="w-5 h-5 text-amber-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        {!! $icons[$feature['icon']] !!}
                    </svg>
                </div>
                <h3 class="text-white font-semibold mb-2">{{ $feature['title'] }}</h3>
                <p class="text-white/50 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
