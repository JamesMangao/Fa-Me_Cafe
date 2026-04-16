@php
$hours = [
    ['day' => 'Monday – Thursday', 'time' => '10:00 AM – 2:00 AM'],
    ['day' => 'Friday',            'time' => '10:00 AM – 2:00 AM'],
    ['day' => 'Saturday',          'time' => '10:00 AM – 2:00 AM'],
    ['day' => 'Sunday',            'time' => '10:00 AM – 2:00 AM'],
];
$info = [
    ['icon' => 'car',         'label' => 'Parking', 'value' => 'Free parking lot & street parking'],
    ['icon' => 'credit-card', 'label' => 'Payment', 'value' => 'Cash, QR / GCash / PayMaya'],
    ['icon' => 'utensils',    'label' => 'Service',  'value' => 'Dine-in & Takeout available'],
];
$icons = [
    'car'         => '<path stroke-linecap="round" stroke-linejoin="round" d="M5 17H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v5a2 2 0 0 1-2 2h-2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/>',
    'credit-card' => '<rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/>',
    'utensils'    => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2M7 2v20M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3zm0 0v7"/>',
];
@endphp

<section id="location" class="bg-[#110900] py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-500 text-sm font-semibold tracking-widest uppercase">Find Us</span>
            <h2 class="text-white text-4xl md:text-5xl font-bold mt-3 mb-4">Visit Fa-Me Café</h2>
            <p class="text-white/50 max-w-md mx-auto">Come hang out, stay late, and experience the warmth of Fa-Me Café in Pacita.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 items-start">
            <div class="space-y-8">
                <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Address</h3>
                            <p class="text-white/60 text-sm leading-relaxed">
                                Veronica, 72 Pacita Ave<br />
                                Pacita 1, San Pedro<br />
                                4023 Laguna, Philippines
                            </p>
                            <a
                                href="https://maps.google.com/maps?q=Fa-Me+Cafe+Pacita+San+Pedro+Laguna"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-block mt-3 text-amber-400 hover:text-amber-300 text-sm font-medium transition-colors"
                            >
                                Open in Google Maps &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-white font-semibold mb-3">Hours</h3>
                            <div class="space-y-2">
                                @foreach($hours as $hour)
                                <div class="flex justify-between gap-4 text-sm">
                                    <span class="text-white/50">{{ $hour['day'] }}</span>
                                    <span class="text-white/80 font-medium">{{ $hour['time'] }}</span>
                                </div>
                                @endforeach
                            </div>
                            <div class="mt-4 inline-flex items-center gap-1.5 bg-green-500/10 border border-green-500/20 rounded-full px-3 py-1 text-green-400 text-xs font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                                Open late until 2 AM daily
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-4">
                    @foreach($info as $item)
                    <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-5 flex items-center gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-amber-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                {!! $icons[$item['icon']] !!}
                            </svg>
                        </div>
                        <div>
                            <p class="text-white/40 text-xs uppercase tracking-wider">{{ $item['label'] }}</p>
                            <p class="text-white/80 text-sm font-medium">{{ $item['value'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden border border-white/10 h-[500px] relative">
                <iframe
                    title="Fa-Me Café Location"
                    class="w-full h-full grayscale"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247160.3801851992!2d120.8597021!3d14.5488004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d7df51e17d81%3A0xf5614453dccea343!2sFa-Me%20Caf%C3%A9%20Pacita!5e0!3m2!1sen!2sph!4v1776328990977!5m2!1sen!2sph"
                    style="border:0"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                <div class="absolute inset-0 pointer-events-none border border-amber-500/10 rounded-2xl"></div>
            </div>
        </div>
    </div>
</section>
