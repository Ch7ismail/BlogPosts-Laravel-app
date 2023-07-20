
<x-layout>
    <div class="flex justify-center">
        <div class="ml-4 select-none font-semibold text-white outline outline-2 rounded-sm outline-red-500 p-4">{{$post->location}}</div>
    </div>

    <div class="mt-4">

    <div class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-10">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mb-6"
                src="{{$post->img ? asset('storage/'.$post->img) : asset('/images/Laravel.png')}}"
                alt=""
            />

            <h3 class="text-2xl mb-2">{{-- {{$listing->title}} --}}{{$post->title}}</h3>
            <div class="text-xl font-bold mb-4">{{-- {{$listing->company}} --}}{{$post->Location}}</div>
            <div class="text-lg my-4">
                {{-- {{$listing->location}} --}}
            <div class="border border-gray-200 w-full mb-6"></div>
            <div class="flex items-center flex-col">
                <h3 class="text-3xl font-bold mb-4">
                    {{$post->description}}
                </h3>
                <div class="text-lg space-y-6">
                   
                    {{-- {{$listing->description}} --}}

                    <a
                        href="{{$post->website}}"
                        target="_blank"
                        class="block bg-red-500 text-white p-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i>{{$post->website}}</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
</div>
</x-layout>