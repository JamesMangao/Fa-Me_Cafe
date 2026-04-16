<section id="menu" class="bg-[#110900] py-24 px-6">
    <div class="max-w-5xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-500 text-sm font-semibold tracking-widest uppercase">What We Serve</span>
            <h2 class="text-white text-4xl md:text-5xl font-bold mt-3 mb-4">Our Menu</h2>
            <p class="text-white/50 max-w-lg mx-auto">Craft coffees, matcha creations, authentic Indonesian dishes, and more — all at honest prices.</p>
        </div>

        <div class="flex justify-center mb-8">
            <div class="flex bg-white/5 border border-white/10 rounded-full p-1 gap-1">
                <button data-tab="drinks" class="menu-main-tab flex items-center gap-2 px-6 py-2.5 rounded-full text-sm font-semibold transition-all bg-amber-500 text-white shadow-lg shadow-amber-500/30">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8zM6 1v3M10 1v3M14 1v3"/>
                    </svg>
                    Drinks
                </button>
                <button data-tab="food" class="menu-main-tab flex items-center gap-2 px-6 py-2.5 rounded-full text-sm font-semibold transition-all text-white/50 hover:text-white">
                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>
                    </svg>
                    Food
                </button>
            </div>
        </div>

        <div id="panel-drinks">
            <div class="flex flex-wrap justify-center gap-2 mb-8" id="drink-subtabs">
                @foreach($drinkSections as $section)
                <button
                    data-drink-sub="{{ $section['id'] }}"
                    class="drink-sub-tab px-4 py-1.5 rounded-full text-xs font-medium transition-all {{ $loop->first ? 'bg-amber-500/20 border border-amber-500/50 text-amber-300' : 'bg-white/5 border border-white/10 text-white/40 hover:text-white/70' }}"
                >
                    {{ $section['label'] }}
                </button>
                @endforeach
            </div>

            @foreach($drinkSections as $section)
            @php
                $allSizes = ['hot', 'iced16', 'iced22'];
                $sizeLabels = ['hot' => 'Hot 12oz', 'iced16' => 'Iced 16oz', 'iced22' => 'Iced 22oz'];
                $visibleSizes = array_filter($allSizes, function($size) use ($section) {
                    foreach ($section['items'] as $item) {
                        if (isset($item['prices'][$size]) && $item['prices'][$size] !== null) return true;
                    }
                    return false;
                });
                $visibleSizes = array_values($visibleSizes);
            @endphp
            <div
                data-drink-panel="{{ $section['id'] }}"
                class="drink-panel {{ $loop->first ? '' : 'hidden' }} bg-white/5 border border-white/[0.08] rounded-2xl overflow-hidden"
            >
                <div class="grid border-b border-white/[0.08]" style="grid-template-columns: 1fr {{ implode(' ', array_fill(0, count($visibleSizes), '100px')) }}">
                    <div class="px-5 py-3 text-xs font-semibold text-white/30 uppercase tracking-wider">Item</div>
                    @foreach($visibleSizes as $size)
                    <div class="px-3 py-3 text-xs font-semibold text-white/30 uppercase tracking-wider text-right">{{ $sizeLabels[$size] }}</div>
                    @endforeach
                </div>

                @foreach($section['items'] as $item)
                @php
                    $badgeClass = [
                        'Signature'  => 'bg-amber-500/20 text-amber-300 border border-amber-500/30',
                        'Bestseller' => 'bg-orange-500/20 text-orange-300 border border-orange-500/30',
                        'Coffee'     => 'bg-stone-500/20 text-stone-300 border border-stone-500/30',
                    ][$item['badge'] ?? ''] ?? 'bg-amber-500/20 text-amber-300';
                @endphp
                <div
                    class="grid items-center hover:bg-white/[0.04] transition-colors {{ !$loop->last ? 'border-b border-white/5' : '' }}"
                    style="grid-template-columns: 1fr {{ implode(' ', array_fill(0, count($visibleSizes), '100px')) }}"
                >
                    <div class="px-5 py-3.5 flex items-center gap-2">
                        <span class="text-white/85 text-sm font-medium">{{ $item['name'] }}</span>
                        @if(!empty($item['badge']))
                        <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full {{ $badgeClass }}">{{ $item['badge'] }}</span>
                        @endif
                    </div>
                    @foreach($visibleSizes as $size)
                    <div class="px-3 py-3.5 text-right">
                        @if(isset($item['prices'][$size]) && $item['prices'][$size] !== null)
                        <span class="text-amber-400 font-semibold text-sm">&#8369;{{ $item['prices'][$size] }}</span>
                        @else
                        <span class="text-white/20 text-sm">&mdash;</span>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div id="panel-food" class="hidden">
            <div class="flex flex-wrap justify-center gap-2 mb-8" id="food-subtabs">
                @foreach($foodSections as $section)
                <button
                    data-food-sub="{{ $section['id'] }}"
                    class="food-sub-tab px-4 py-1.5 rounded-full text-xs font-medium transition-all {{ $loop->first ? 'bg-amber-500/20 border border-amber-500/50 text-amber-300' : 'bg-white/5 border border-white/10 text-white/40 hover:text-white/70' }}"
                >
                    {{ $section['label'] }}
                </button>
                @endforeach
            </div>

            @foreach($foodSections as $section)
            <div
                data-food-panel="{{ $section['id'] }}"
                class="food-panel {{ $loop->first ? '' : 'hidden' }} grid sm:grid-cols-2 gap-5"
            >
                @foreach($section['items'] as $item)
                @php
                    $foodBadgeClass = [
                        'Weekend Special' => 'bg-rose-500/20 text-rose-300 border border-rose-500/30',
                    ][$item['badge'] ?? ''] ?? 'bg-amber-500/20 text-amber-300';
                @endphp
                <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-5 hover:border-amber-500/25 hover:bg-white/[0.07] transition-all">
                    <div class="flex items-start justify-between gap-3 mb-2">
                        <div class="flex items-center gap-2 flex-wrap">
                            <h3 class="text-white font-semibold">{{ $item['name'] }}</h3>
                            @if(!empty($item['badge']))
                            <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full {{ $foodBadgeClass }}">{{ $item['badge'] }}</span>
                            @endif
                        </div>
                        <span class="text-amber-400 font-bold text-sm shrink-0">&#8369;{{ $item['price'] }}</span>
                    </div>

                    @if(!empty($item['desc']))
                    <p class="text-white/50 text-sm leading-relaxed mb-3">{{ $item['desc'] }}</p>
                    @endif

                    @if(!empty($item['variants']))
                    <div class="flex flex-wrap gap-2 mb-3">
                        @foreach($item['variants'] as $variant)
                        <span class="text-xs bg-white/[0.08] border border-white/10 rounded-full px-3 py-1 text-white/60">
                            {{ $variant['label'] }} &mdash; <span class="text-amber-400 font-medium">&#8369;{{ $variant['price'] }}</span>
                        </span>
                        @endforeach
                    </div>
                    @endif

                    @if(!empty($item['note']))
                    <p class="text-xs text-amber-500/70 mt-2 italic">{{ $item['note'] }}</p>
                    @endif
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <p class="text-center text-white/25 text-xs mt-10">Prices may vary. Menu subject to availability.</p>
    </div>
</section>
