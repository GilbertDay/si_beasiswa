<x-authentication-layout>
    <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white dark:bg-gray-800 shadow-xs rounded-xl">
        <div class="px-5 pt-5">
    <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold text-center mb-1">{{ __('SIA Beasiswa') }}</h1>
    <p class="text-1xl text-center mb-6">Login</p>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <!-- NIM -->
            <div>
                <x-label for="nim" value="{{ __('NIM') }}" />
                <x-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')" required autofocus />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
        </div>
        <div class="flex justify-center items-center  mt-6">
            @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                </div>
            @endif
            <x-button class="ml-3">
                {{ __('Sign in') }}
            </x-button>
        </div>
    </form>
    <x-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-gray-100 dark:border-gray-700/60 mb-3">
        <div class="text-sm">
            {{ __('Belum punya akun?') }} <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
        </div>
        <!-- Warning -->
        {{-- <div class="mt-5">
            <div class="bg-yellow-500/20 text-yellow-700 px-3 py-2 rounded-lg">
                <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                    <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                </svg>
                <span class="text-sm">
                    To support you during the pandemic super pro features are free until March 31st.
                </span>
            </div>
        </div> --}}
    </div>
    </div>
    </div>
</x-authentication-layout>
