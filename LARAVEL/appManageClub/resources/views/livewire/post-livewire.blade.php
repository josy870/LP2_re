<div class="max-w-7xl mx-auto p-6 lg:p-8 grid md:grid-cols-3 sm:grid-cols-2 gap-2 ">
    @foreach ($noticias as $noticia)


    <div class=" w-full ">
        <div class="  flex-none  rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"  title="Woman holding a mug">
         <img src="{{Storage::url($noticia->image->url)}}" >
        </div>
        <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <p class="text-sm text-gray-600 flex items-center">
              <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
              </svg>
              {{$noticia->category->name}}
            </p>
            <div class="text-gray-900 font-bold text-xl mb-2">{{$noticia->name}}</div>
            <p class="text-gray-700 text-sm">{{Str::limit($noticia->extract,100)}}</p>
          </div>
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full mr-4" src="{{Storage::url($noticia->image->url)}}">
            <div class="text-sm">
              <p class="text-gray-900 leading-none">{{$noticia->user->name}}</p>
              <p class="text-gray-600">{{$noticia->updated_at}}</p>
            </div>
          </div>
        </div>
    </div>
      @endforeach
  </div>
