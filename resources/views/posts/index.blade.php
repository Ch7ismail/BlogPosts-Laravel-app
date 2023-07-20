<x-layout>
    @include('partials._header')
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 lg:gap-4">

    @unless(count($posts) == 0)

    @foreach($posts as $post)
        <x-post-card :post="$post" />
    @endforeach

    @else
        <p class="text-lg text-white">Nothing found!</p>
    @endunless

    </div>
    <div class="mt-6 p-4">
        {{$posts->links()}}
    </div>
</x-layout>