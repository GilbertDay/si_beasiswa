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
                <label for="nim" class="block text-sm font-medium text-gray-700">{{ __('NIM / NIP') }}</label>
                <x-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')" required autofocus />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
        </div>
        <div class="flex justify-center items-center mt-3">
            <x-button class="w-full mb-3">
                {{ __('Sign in') }}
            </x-button>
        </div>
    </form>
    <x-validation-errors class="mt-1" />
    <!-- Footer -->
    <div class="pt-5 mt-2 border-t border-gray-100 dark:border-gray-700/60 mb-3">
        <div class="text-sm">
            {{ __('Belum punya akun?') }} <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>
    </div>
    </div>
</x-authentication-layout>
