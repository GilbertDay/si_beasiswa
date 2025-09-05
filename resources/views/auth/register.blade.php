<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">{{ __('Create your Account') }}</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="name">{{ __('Nama Lengkap') }} <span class="text-red-500">*</span></x-label>
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <!-- NIM -->
            <div class="mt-4">
                <x-label for="nim" value="{{ __('NIM') }}" />
                <x-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="tanggal_lahir" value="{{ __('Tanggal Lahir') }}" />
                <x-input id="tanggal_lahir" class="block mt-1 w-full" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="program_studi" value="{{ __('Program Studi') }}" />
                <select name="program_studi" id="program_studi" class="block mt-1 w-full rounded-lg" required>
                    <option value="">-- Pilih Program Studi --</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Akuntansi">Akuntansi</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="gender" value="{{ __('Gender') }}" />
                <select name="gender" id="gender" class="block mt-1 w-full rounded-lg" required>
                    <option value="">-- Pilih Gender --</option>
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="mt-4">
                <x-label for="no_telp" value="{{ __('No Telp') }}" />
                <x-input id="no_telp" class="block mt-1 w-full" type="text" name="no_telp" :value="old('no_telp')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="ipk" value="{{ __('IPK') }}" />
                <x-input id="ipk" class="block mt-1 w-full" type="text" name="ipk" :value="old('ipk')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="total_sks" value="{{ __('Total SKS') }}" />
                <x-input id="total_sks" class="block mt-1 w-full" type="text" name="total_sks" :value="old('total_sks')" required autofocus />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6 w-full">
            <x-button>
                {{ __('Sign Up') }}
            </x-button>
        </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-6">
                    <label class="flex items-start">
                        <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                        <span class="text-sm ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm underline hover:no-underline">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm underline hover:no-underline">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </span>
                    </label>
                </div>
            @endif
    </form>
    <x-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-gray-100 dark:border-gray-700/60">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout>
