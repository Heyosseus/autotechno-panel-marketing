<x-layout>
    <x-header></x-header>
    <div  class="p-8 lg:p-16 flex flex-col xl:flex-row justify-between space-y-5 xl:space-x-5 ">
        <div class="w-full xl:w-1/2 flex flex-col">
            <h1 class="text-4xl text-left py-4">Our <span class="font-bold text-gray-950">news</span></h1>
            <div class="w-full h-px bg-gray-300 text-center "></div>
            @forelse ($news as $article)
                <div class="flex flex-col sm:flex-row justify-between md:mt-5 w-full sm:space-x-2 shadow-lg p-2 sm:p-6">
                    <div>
                        <img src="{{ Storage::url($article->image) }}" alt="" class="w-full md:w-48 h-auto sm:h-40 object-fill">
                        <div class="flex items-center justify-between mt-4 sm:flex-col sm:items-start sm:mt-0">
{{--                            <p class="mt-0 text-xs sm:mt-2 "><strong>{{__('services.author')}}:</strong>  {{ $article->user?->name ?? 'Gazelle Finance' }}</p>--}}
                            <p class="text-xs mt-2"><strong>Date:</strong> {{ substr($article->created_at, 0, 11) }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col mt-8 sm:mt-0 h-full justify-between w-full sm:w-1/2 xl:w-96">
                        <div>
                            <h1 class="text-lg sm:text-xl font-bold">{{ $article->title }}</h1>
                            <div class="w-full h-px bg-gray-300 mt-2 text-center"></div>
                            <p class="w-full text-sm break-words mt-2">{{ \Illuminate\Support\Str::limit($article->content, 100) }}</p>

                        </div>
                        <a href="{{ route('news.show', ['news' => $article->id]) }}" class="text-gray-950 font-semibold justify-end flex items-center space-x-2">
                            <p>See more</p>
                            <img src="{{ asset('icons/rightArrow.svg') }}" alt="" width="15">
                        </a>
                    </div>
                </div>
            @empty
                <div class="text-center w-full">
                    <p class="py-16 bg-gray-950 w-full text-2xl text-white font-medium">No news yet.</p>
                </div>
            @endforelse
            <div class="flex flex-row justify-between mt-8">
                <div class="">{{ $news->links('pagination::tailwind') }}</div>
            </div>
        </div>

        <div class="w-full xl:w-1/3 h-fit  shadow flex flex-col  bg-gray-100 xl:bg-gray-50 ">
            <div class="group cursor-pointer p-4">
                <h1 class="text-xl sm:text-3xl text-left ml-2 group-hover:text-gray-950 group-hover:font-bold group-hover:transition-colors">Our <span class="group-hover:transition-colors font-bold text-gray-950 group-hover:text-black group-hover:font-light"> links </span></h1>
            </div>
            @forelse ($links as $link)
                <div class="py-6 border-b-2 border-t-2  mr-2 flex items-center space-x-4 cursor-pointer group hover:bg-white ">
                    <span class="p-1 rounded-full bg-gray-950 ml-2"></span>
                    <a href="{{$link->url}}" target="_blank" class="group-hover:text-black font-semibold text-gray-500 ml-2">{{$link->title}}</a>
                </div>
            @empty
                <div class="text-center p-10">
                    <p class="">no links yet.</p>
                </div>
            @endforelse
        </div>

    </div>
{{--    <x-footer></x-footer>--}}
</x-layout>
