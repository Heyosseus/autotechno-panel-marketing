<x-layout>
    <x-header></x-header>

    <div class="p-8 h-[80vh]">
        <div class="flex flex-col">
            <div class="flex justify-between cursor-pointer items-center">
                <div onclick="window.history.back();" class="flex items-center space-x-1 btn btn-circle outline-none border-none"><img src="{{asset('icons/longLeftArrowIcon.svg')}}" alt="" width="20">
                </div>
                <h1 class="lg:text-4xl  font-bold leading-tight text-gray-800 ml-auto mr-20">Latest <em class="text-red-900">News</em> and updates</h1>

            </div>
            <div class="flex flex-col md:flex-row justify-between mt-5 w-full shadow-lg p-2 sm:p-6">
                <div class="lg:w-1/3 ">
                    <img src="{{ Storage::url($news->image) }}" alt="" class="w-full md:w-72 h-auto sm:h-56 object-fill">
                    <div class="flex items-center justify-between mt-4 sm:flex-col sm:items-start sm:mt-0">
{{--                        <p class="mt-0 text-md sm:mt-2 lg:text-lg"><strong>{{__('services.author')}}:</strong> {{ $news->user?->name ?? 'Gazelle Finance' }}</p>--}}
                        <p class="text-md  lg:text-lg mt-2"><strong>Date:</strong> {{ $news->created_at->format('M d, Y') }}</p>
                    </div>
                </div>
                <div class="flex flex-col mt-8 md:mt-0 space-y-10 w-full md:w-1/2 flex-grow">
                    <div>
                        <h1 class="sm:text-xl font-bold uppercase text-3xl">{{ $news->title }}</h1>
                        <div class="w-full h-px bg-gray-300 mt-2">
                        </div>
                        <p class="mt-4">{{$news->content}}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
