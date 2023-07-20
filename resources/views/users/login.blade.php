<x-layout>
    <div class="flex justify-center">
        <div class="ml-4 select-none font-semibold text-white outline outline-2 rounded-sm outline-red-500 p-4">Log in</div>
    </div>

    <div class="mt-24">

    <form method="POST" action="/users/authenticate">
        @csrf
        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2 text-white"
                >Email</label
            >
            <input
                type="email"
                class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2 text-white"
            >
                Password
            </label>
            <input
                type="password"
                class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="outline outline-2 rounded-sm outline-red-500 text-white  py-2 px-4 bg-red-500"
            >
                Sign In
            </button>
        </div>

        <div class="mt-8">
            <p class="text-white">
                Don't have an account?
                <a href="/users/register" class="text-red-500"
                    >Register</a
                >
            </p>
        </div>
    </form>
    </div>
</x-layout>

