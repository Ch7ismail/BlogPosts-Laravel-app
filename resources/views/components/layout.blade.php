<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BlogPosts</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">  
        <div class="flex flex-col justify-center items-center min-h-screen dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                <div class="flex items-center justify-between flex-col gap-10 md:flex-row p-6 w-full">
                    <div>
                        <a href="/" class="font-semibold text-red-500 outline outline-2 outline-red-500 rounded p-2 px-4 uppercase">Home</a>
                    </div>
                    <div class="flex flex-col items-center gap-4 sm:flex-row">
                    @auth
                        <div class="font-semibold text-white p-2 px-4">Welcome <span class="text-red-500 uppercase">{{auth()->user()->name}}</span></div>
                        <a href="/posts/manage" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white outline outline-2 outline-red-500 rounded p-2 px-4">Manage Posts</a>
                        <a href="/posts/create" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white outline outline-2 outline-red-500 rounded p-2 px-4 ml-4">Create</a>

                        <form method="POST" action="/logout" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white outline outline-2 outline-red-500 rounded p-2 px-4">
                            @csrf
                            <button type="submit">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="/users/login" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white outline outline-2 outline-red-500 rounded p-2 px-4">Log in</a>
                        
                        <a href="/users/register" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white outline outline-2 outline-red-500 rounded p-2 px-4">Register</a>
                    @endauth
                    </div>
                </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                {{$slot}}
            </div>
        </div>
        <x-message/>
    </body>
</html>

