<x-layout>
    <x-header>

    </x-header>

    <x-carousel></x-carousel>

    <h3 class="p-4 lg:pt-20 lg:ml-20 text-md lg:text-lg uppercase">Our Blogs</h3>
    <h1 class="p-4 lg:pt-4 lg:ml-20 text-3xl lg:text-5xl tracking-tight	font-semibold">discover <em
            class="text-red-800">insights</em> and stories</h1>


    <div class="flex flex-wrap justify-center w-full p-4 lg:px-20 ">
        @forelse($blogs as $blog)
            <x-blog :blog="$blog"></x-blog>
        @empty
            <div class="text-center w-full">
                <p class="py-16 bg-gray-950 w-full text-2xl text-white font-medium">No blogs yet.</p>
            </div>
        @endforelse
    </div>
    <a href="/news" class="btn btn-circle mx-auto w-fit px-8 my-10">See more</a>


    <x-footer></x-footer>
</x-layout>
