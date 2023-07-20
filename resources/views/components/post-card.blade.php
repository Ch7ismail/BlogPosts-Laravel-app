@props(['post'])

    <a href="/posts/{{$post->id}}" class="h-48 p-4 bg-white dark:bg-gray-800/50  dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 hover:outline hover:outline-2 hover:outline-red-500">
        <div class="flex gap-4 w-full">
            <div class="h-full w-[50%] text-white dark:bg-red-500/20 flex items-center justify-center rounded-lg overflow-hidden">
                <img src="{{$post->img ? asset('storage/'.$post->img) : asset('/images/Laravel.png')}}" alt="img" class="object-cover w-full h-full">
            </div>

            <div class="w-[50%]">
                <h2 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white">{{$post->location}}</h2>

                <h3 class="mt-4 text-gray-500 dark:text-gray-400 text-md leading-relaxed">
                    {{$post->title}}
                </h3>
            </p>
            </div>
        </div>
    </a>
