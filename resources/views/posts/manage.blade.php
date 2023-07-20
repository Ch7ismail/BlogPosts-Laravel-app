<x-layout>
    <div class="flex justify-center">
        <div class="ml-4 select-none font-semibold text-white outline outline-2 rounded-sm outline-red-500 p-4">Manage posts</div>
    </div>

    <div class="mt-6">
    
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless ($posts->isEmpty())
                @foreach ($posts as $post)
                
                <tr class="border-gray-300">
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg text-white"
                    >
                        <a href="/posts/show">
                            {{$post->title}}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/posts/{{$post->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            >
                            Edit
                            </a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                    <form method="POST" action="/posts/{{$post->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">DELETE</button>
                    </form>
                    </td>
                </tr>   
                    
                @endforeach
                @else
                <tr class="border-gary-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <p class="text-center text-white">
                            No Posts Found
                        </p>
                    </td>
                </tr>
                @endunless
            </tbody>
        </table>

    </div>
</x-layout>
