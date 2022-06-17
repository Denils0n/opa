<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- CPF  -->
            <div class="mt-4">
                <x-label for="cpf" :value="__('cpf')" />

                <x-input id="cpf" class="block mt-1 w-full" type="number" name="cpf" :value="old('cpf')" required  />
            </div>

            <!-- telefone  -->
            <div class="mt-4">
                <x-label for="telefone" :value="__('telefone')" />

                <x-input id="telefone" class="block mt-1 w-full" type="number" name="telefone" :value="old('telefone')" required  />
            </div>
            

            <!-- estado  -->
            <div class="mt-4">
                <x-label for="estado" :value="__('estado')" />

                <x-input id="estado" class="block mt-1 w-full" type="string" name="estado" :value="old('estado')" required  />
            </div>

            <!-- cidade  -->
            <div class="mt-4">
                <x-label for="cidade" :value="__('cidade')" />

                <x-input id="cidade" class="block mt-1 w-full" type="string" name="cidade" :value="old('cidade')" required  />
            </div>

            <!-- bairro  -->
            <div class="mt-4">
                <x-label for="bairro" :value="__('bairro')" />

                <x-input id="bairro" class="block mt-1 w-full" type="string" name="bairro" :value="old('bairro')" required  />
            </div>

            <!-- rua  -->
            <div class="mt-4">
                <x-label for="rua" :value="__('rua')" />

                <x-input id="rua" class="block mt-1 w-full" type="string" name="rua" :value="old('rua')" required  />
            </div>

            <!-- numero  -->
            <div class="mt-4">
                <x-label for="numero" :value="__('numero')" />

                <x-input id="numero" class="block mt-1 w-full" type="string" name="numero" :value="old('numero')" required  />
            </div>

            <!-- complemento  -->
            <div class="mt-4">
                <x-label for="complemento" :value="__('complemento')" />

                <x-input id="complemento" class="block mt-1 w-full" type="string " name="complemento" :value="old('complemento')" required  />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
