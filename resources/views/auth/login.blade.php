<x-authentication-layout>
    <h1 class="text-2xl text-center font-bold mb-6 text-red-600 dark:text-slate-50">{{ __('PELAYANAN DATA KAPAL') }}</h1>
    <h2 class="text-xl text-center font-bold text-slate-900 dark:text-slate-200">{{ __('Pelabuhan Rauf Rahman') }}</h2>
    <h2 class="text-xl text-center font-bold mb-6 text-slate-900 dark:text-slate-200">{{ __('Benteng Selayar') }}</h2>
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-jet-label class="" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
        </div>
        <div class="flex flex-col items-center justify-center mt-6">
            {{-- @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm input underline hover:no-underline" href="{{ route('password.request') }}">
            {{ __('Forgot Password?') }}
            </a>
        </div>
        @endif --}}

        <x-jet-button class="flex items-center justify-center my-3">
            {{ __('Sign in') }}
        </x-jet-button>
        </div>



        <!-- <x-jet-button class="ml-3">
            {{ __('Sign in') }}
        </x-jet-button>             -->
    </form>
    <x-jet-validation-errors class="mt-4" />
    <div class="flex items-center justify-center mt-4">
        <a href="/guest" class="flex-col p-auto btn bg-indigo-500  hover:bg-indigo-600 text-white ">
            <button class="">
                Login sebagai tamu
            </button>
        </a>
    </div>


</x-authentication-layout>