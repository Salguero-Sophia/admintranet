<x-guest-layout>

    <div class="flex min-h-full">
        <div class="flex flex-1 flex-col justify-center px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
            <img class="h-10 w-auto" src="{{ asset('isotipo-sm.svg') }}" alt="Your Company">
            <h2 class="mt-8 text-2xl font-bold leading-9 tracking-tight text-gray-900">Iniciar Sesión</h2>
            </div>
    
            <div class="mt-10">
            <div>
               
                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
    
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
    
                <div class="flex items-center justify-between">
                    <div class="flex items-center" {{ old('remember') ? 'checked' : '' }}>
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                    <label for="remember-me" class="ml-3 block text-sm leading-6 text-gray-700">Remember me</label>
                    </div>
                </div>
    
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md sm-bk-blue px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                </div>
                </form>
            </div>

            </div>
        </div>
        </div>
        <div class="relative hidden w-0 flex-1 lg:block">
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('banners/dallas.jpeg') }}" alt="">
        </div>
    </div>
    
</x-guest-layout>
