<div id="carouselExampleControls" class="relative">
    <!-- Carousel items -->
    <div class="relative w-full overflow-hidden">
        <!-- First item -->
        <div class="relative float-left w-full border-none" data-carousel-item data-carousel-active>
            <img loading="lazy" src="{{asset('assets/1674647372.png')}}" class="block w-full h-[90vh] object-fit" alt="car" />
        </div>
        <!-- Second item -->
        <div class="relative float-left w-full hidden border-none" data-carousel-item>
            <img loading="lazy" src="{{asset('assets/1674648101.png')}}" class="block w-full  h-[90vh] object-fit" alt="car" />
        </div>
        <!-- Third item -->
        <div class="relative float-left w-full hidden outline-0 border-none" data-carousel-item>
            <img loading="lazy" src="{{asset('assets/1674648544.png')}}" class="block w-full  h-[90vh] object-fit" alt="car" />
        </div>
    </div>

    <!-- Carousel controls - previous item -->
    <button class="absolute left-0 top-0 z-10 flex items-center justify-center h-full p-4 border-none" type="button" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </span>
    </button>

    <!-- Carousel controls - next item -->
    <button class="absolute right-0 top-0 z-10 flex items-center justify-center h-full p-4 border-none" type="button" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30">
            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </span>
    </button>
</div>
