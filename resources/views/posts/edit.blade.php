<x-layout>
    <div class="flex justify-center">
        <div class="ml-4 select-none font-semibold text-white outline outline-2 rounded-sm outline-red-500 p-4">Edit post</div>
    </div>

    <div class="mt-6">
    
        <form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <div>    
                    <div class="mb-6">
                        <label for="title" class="inline-block text-white text-lg mb-2"
                            >Title</label
                        >
                        <input
                            type="text"
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="title"
                            value="{{$post->title}}"
                        />
                        @error('title')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <label
                            for="location"
                            class="inline-block text-white text-lg mb-2"
                            >Location</label
                        >
                        <input
                            type="text"
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="location"
                            value="{{$post->location}}"
                        />
                        @error('location')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <label for="email" class="inline-block text-white text-lg mb-2"
                            >Contact Email</label
                        >
                        <input
                            type="text"
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="email"
                            value="{{$post->email}}"
                        />
                        @error('email')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                    
                    <img
                    class="w-48 mr-6 mb-6"
                    src="{{$post->img ? asset('storage/'.$post->img) : asset('/images/Laravel.png')}}"
                    alt=""
                />
                </div>

                <div>
                    <div class="mb-6">
                        <label
                            for="website"
                            class="inline-block text-white text-lg mb-2"
                        >
                            Website/Application URL
                        </label>
                        <input
                            type="text"
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="website"
                            value="{{$post->website}}"
                        />
                        @error('website')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <label for="img" class="inline-block text-white text-lg mb-2">
                            Post image
                        </label>
                        <input
                            type="file"
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="img"
                        />
                        @error('img')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <label
                            for="description"
                            class="inline-block text-white text-lg mb-2"
                        >
                            Post Description
                        </label>
                        <textarea
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                            name="description"
                            rows="5"

                            placeholder="Write you post here"
                        >
                        {{$post->description }}
                        </textarea>
                        @error('description')
                            <div class="text-red-500 text-xs mt-1">{{$message}}</div>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <button
                            class="outline outline-2 rounded-sm outline-red-500 text-white bg-red-500 py-2 px-4"
                        >
                            Save
                        </button>
                    
                        <a href="/" class="text-white ml-4"> Back </a>
                    </div>
                </div>
            </div>    
        </form>

    </div>
</x-layout>