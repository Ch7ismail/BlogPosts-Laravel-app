<x-layout>
    <div class="flex justify-center">
        <div class="ml-4 select-none font-semibold text-white outline outline-2 rounded-sm outline-red-500 p-4">Register</div>
    </div>

    <div class="mt-6">

    <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <label for="name" class="inline-block text-white text-lg mb-2">
                Name
            </label>
                <input
                type="text"
                class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                name="name"
                value="{{old('name')}}"
            />
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-white text-lg mb-2"
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
                class="inline-block text-white text-lg mb-2"
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
            <label
                for="password_confirmation"
                class="inline-block text-white text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="outline outline-2 rounded-sm outline-red-500 text-white bg-transparent p-2 w-full"
                name="password_confirmation"
                value="{{old('password_confirmation')}}"
            />
            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button
                type="submit"
                class="outline outline-2 rounded-sm outline-red-500 text-white bg-red-500 p-2 px-4"
            >
                Sign Up
            </button>
        </div>

        <div class="mt-8">
            <p class="text-white">
                Already have an account?
                <a href="/users/login" class="text-red-500"
                    >Login</a
                >
            </p>
        </div>
    </form>
    </div>
</x-layout>

