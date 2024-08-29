<div id="sidebar"
     class=" lg:hidden fixed top-0 left-[-10px] w-[100vw] h-full bg-white shadow-xl transform -translate-x-full overflow-y-auto transition-transform duration-300 ease-in-out z-40">
    <div class="pl-10 pr-4 py-3 md:px-20 md:py-12 select-none">
        <div class="flex items-start justify-between w-full">
            <h1 class="font-bold mb-4 text-3xl">Links</h1>
            <img src="{{ asset('icons/closeIcon.svg') }} " alt="" width="35" id="close" class="-mr-2 cursor-pointer active:rotate-[360deg] duration-300 transition" >
        </div>
        <div id="services-link" class="block py-2 text-xl relative group">
            <span class="flex justify-between items-center cursor-pointer"><p>Services</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

            <span
                class="absolute inset-x-0 bottom-0 h-[2px]  bg-blue-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
        </div>
        <a href="/about" class="block py-2 text-xl relative group">
            <span class="flex justify-between items-center"><p>About</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

            <span
                class="absolute inset-x-0 bottom-0 h-[2px]  bg-blue-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
        </a>
        <a href="/products" class="block py-2 text-xl relative group">
            <span class="flex justify-between items-center"><p>Products</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

            <span
                class="absolute inset-x-0 bottom-0 h-[2px]  bg-blue-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
        </a>
        <a href="/news" class="block py-2 text-xl relative group">
            <span class="flex justify-between items-center"><p>News</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>

            <span
                class="absolute inset-x-0 bottom-0 h-[2px]  bg-blue-950 origin-left transform scale-x-0 transition-transform duration-700  group-hover:scale-x-100">
                    </span>
        </a>
        <a href="/contact" class="block py-2 text-xl relative group cursor-pointer">
            <span class="flex justify-between items-center"><p>Contact</p> <img src="{{asset('icons/rightArrow.svg')}}" alt="" width="15"></span>
            <span
                class="absolute inset-x-0 bottom-0 h-[2px] bg-black origin-left transform scale-x-0 transition-transform duration-700 group-hover:scale-x-100">
                    </span>
        </a>
        <div class="flex space-x-4 mt-16">
            <a href=""><img style="width: 34px" src="{{ asset('icons/en.webp') }}" alt=""></a>
            <a href=""><img style="width: 34px" src="{{ asset('icons/ge.png') }}" alt=""></a>
        </div>
    </div>

</div>
<script>
    document.getElementById('services-link').addEventListener('click', function(event) {
        event.preventDefault();
        const submenu = this.querySelector('.submenu');
        submenu.classList.toggle('hidden');
    });

    document.querySelectorAll('.submenu a').forEach(link => {
        link.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop the click event from bubbling up
        });
    });
</script>
