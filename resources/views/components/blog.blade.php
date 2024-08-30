<a href="{{ route('news.show', ['news' => $blog->id]) }}" class="block w-full md:w-1/2 lg:w-1/3 p-4 ">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden cursor-pointer hover:scale-105 transition duration-500">
        <img src="{{Storage::url($blog->image)}}" alt=""
             class="w-full h-64 object-fit  rounded-t-lg cursor-pointer hover:scale-110 transition duration-500">
        <div class="p-8">
            <h2 class="blogTitle font-bold text-2xl text-gray-800">{{$blog->title}}</h2>
        </div>
    </div>
</a>
