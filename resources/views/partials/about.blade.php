@php
$features = [
    ['icon' => 'moon',          'title' => 'Late Night Spot',      'desc' => 'Open until 2 AM — perfect for night owls and late-night hangouts.'],
    ['icon' => 'utensils',      'title' => 'Authentic Indonesian', 'desc' => 'Chef-crafted rendang and martabak manis with genuine Indonesian flavors.'],
    ['icon' => 'users',         'title' => 'Barkada-Friendly',     'desc' => 'Spacious indoor and al fresco seating — ideal for groups and family gatherings.'],
    ['icon' => 'parking',       'title' => 'Free Parking',         'desc' => 'Plenty of free parking space so you can relax without the hassle.'],
    ['icon' => 'credit-card',   'title' => 'QR Payments',          'desc' => 'Contactless and QR payment options available for your convenience.'],
    ['icon' => 'home',          'title' => 'Cozy Atmosphere',      'desc' => 'A warm, aesthetic vibe that makes every visit feel like a retreat.'],
];
@endphp

<section id="about" class="bg-[#0d0700] py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center mb-20">
            <div>
                <span class="text-amber-500 text-sm font-semibold tracking-widest uppercase">OUR STORY</span>
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
                        <div class="text-white/50 text-sm mt-1">Budget-Friendly</div>
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
                    alt="Interior of Fa-Me Café Pacita featuring cozy warm lighting and aesthetic seating area"
                    class="rounded-2xl w-full h-80 object-cover"
                    loading="lazy"
                />
                <div class="absolute -bottom-6 -left-6 w-40 h-40 rounded-2xl overflow-hidden border-4 border-[#0d0700]">
                    <img
                        src="{{ asset('images/fame-cafe-coffee.png') }}"
                        alt="A freshly brewed signature latte at Fa-Me Café"
                        class="w-full h-full object-cover"
                        loading="lazy"
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
                    <x-icon :name="$feature['icon']" class="w-5 h-5 text-amber-400" />
                </div>
                <h3 class="text-white font-semibold mb-2">{{ $feature['title'] }}</h3>
                <p class="text-white/50 text-sm leading-relaxed">{{ $feature['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
