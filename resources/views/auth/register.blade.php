<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus autocomplete="name"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autocomplete="username"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>
        <div class="mt-4">
            <x-input-label for="city" :value="__('City')"/>
            <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')"/>
            <x-input-error :messages="$errors->get('city')" class="mt-2"/>
        </div>
        <div class="mt-4">
            <x-input-label for="adress" :value="__('adress')"/>
            <x-text-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')"/>
            <x-input-error :messages="$errors->get('adress')" class="mt-2"/>
        </div>
        <div class="mt-4">
            <x-input-label for="PersonalNumber" :value="__('PersonalNumber')"/>
            <x-text-input id="PersonalNumber" class="block mt-1 w-full" type="text" name="PersonalNumber" :value="old('PersonalNumber')"/>
            <x-input-error :messages="$errors->get('PersonalNumber')" class="mt-2"/>
        </div>
        <div class="mt-4">
            <x-input-label for="WorkNumber" :value="__('WorkNumber')"/>
            <x-text-input id="WorkNumber" class="block mt-1 w-full" type="text" name="WorkNumber" :value="old('WorkNumber')"/>
            <x-input-error :messages="$errors->get('WorkNumber')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')"/>

            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
