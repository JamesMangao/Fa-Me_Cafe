@php
$reviews = [
    ['name' => 'Sasha Yana',          'time' => '3 months ago',  'rating' => 5, 'text' => "Fa-Me Café never disappoints! Rich, flavorful coffee that hits the spot every time. Super aesthetic place! Highly recommended!", 'food' => 5, 'service' => 5, 'atm' => 5],
    ['name' => 'Michael Baloy',       'time' => '4 months ago',  'rating' => 5, 'text' => "Their coffee is absolutely mind-blowing! New fave shop in the area! Also try their rendang — the owner/chef is Indonesian so it tastes authentic.", 'food' => 5, 'service' => 5, 'atm' => 5],
    ['name' => 'Angelo Hernandez',    'time' => '3 months ago',  'rating' => 5, 'text' => "We've tried all their Indo food, the taste is very authentic because their Chef is Indonesian. Kudos to the chef making the rendang not too spicy. The ambiance is very nice and their drinks are way better than expected.", 'food' => 5, 'service' => 5, 'atm' => 5],
    ['name' => 'Claudette Rull',      'time' => 'a month ago',   'rating' => 5, 'text' => "Visited our close relatives nearby and found this gem! Coffee is of great quality, and the food choices are unique and soooo yum! Staff were all smiles. Even met the owners who are so welcoming and friendly.", 'food' => 5, 'service' => 5, 'atm' => 5],
    ['name' => 'Glenn Kavin Tabuena', 'time' => '3 months ago',  'rating' => 4, 'text' => "Perfect spot for late-night hangouts since they close around 2 AM. The Biscoff cheesecake is good. The fries and chicken poppers are good. Finally a brand new tambayan spot in Pacita.", 'food' => 4, 'service' => 3, 'atm' => 4],
    ['name' => 'Angelita Dizon',      'time' => '2 months ago',  'rating' => 4, 'text' => "The place is cozy and there were not many people so you can stay for a while and have chats with friends. They also have al fresco seating in case it's full inside the cafe.", 'food' => 4, 'service' => 4, 'atm' => 4],
];
@endphp

<section id="reviews" class="bg-[#0d0700] py-24 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <span class="text-amber-500 text-sm font-semibold tracking-widest uppercase">What People Say</span>
            <h2 class="text-white text-4xl md:text-5xl font-bold mt-3 mb-4">Guest Reviews</h2>
            <div class="flex items-center justify-center gap-3 mt-4">
                <div class="flex gap-1">
                    @for($i = 1; $i <= 5; $i++)
                    <svg class="w-5 h-5 {{ $i <= 4 ? 'text-amber-400' : 'text-amber-400/40' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    @endfor
                </div>
                <span class="text-white text-xl font-bold">4.1</span>
                <span class="text-white/40">/ 5.0 &middot; 25 reviews on Google</span>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($reviews as $review)
            <div class="bg-white/5 border border-white/[0.08] rounded-2xl p-6 hover:border-amber-500/20 hover:bg-white/[0.07] transition-all flex flex-col">
                <svg class="w-8 h-8 text-amber-500/30 mb-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/>
                    <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                </svg>
                <p class="text-white/70 text-sm leading-relaxed flex-1 mb-5">"{{ $review['text'] }}"</p>
                <div class="border-t border-white/[0.08] pt-4">
                    <div class="flex items-center justify-between mb-2">
                        <div>
                            <p class="text-white font-semibold text-sm">{{ $review['name'] }}</p>
                            <p class="text-white/30 text-xs mt-0.5">{{ $review['time'] }}</p>
                        </div>
                        <div class="flex gap-0.5">
                            @for($i = 1; $i <= 5; $i++)
                            <svg class="w-3.5 h-3.5 {{ $i <= $review['rating'] ? 'text-amber-400' : 'text-white/20' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            @endfor
                        </div>
                    </div>
                    <div class="flex gap-4 text-xs text-white/40 mt-2">
                        <span>Food <span class="text-amber-400 font-medium">{{ $review['food'] }}/5</span></span>
                        <span>Service <span class="text-amber-400 font-medium">{{ $review['service'] }}/5</span></span>
                        <span>Atmos <span class="text-amber-400 font-medium">{{ $review['atm'] }}/5</span></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a
                href="https://search.google.com/local/writereview?placeid=ChIJgX0e1d_X0zERQ6POXEVEYfU"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 border border-amber-500/30 text-amber-400 hover:bg-amber-500/10 px-6 py-3 rounded-full text-sm font-medium transition-all"
            >
                <svg class="w-4 h-4 fill-amber-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Leave a Review on Google
            </a>
        </div>
    </div>
</section>
