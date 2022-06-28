<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('prestador.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nome" :value="__('Nome')" />

                <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />
            </div>

            <!-- CPF  -->
            <div class="mt-4">
                <x-label for="cpf" :value="__('CPF/CNPJ')" />

                <x-input id="cpf" class="block mt-1 w-full" type="number" name="cpf" :value="old('cpf')" required  />
            </div>

            <!-- celular  -->
            <div class="mt-4">
                <x-label for="celular" :value="__('Celular')" />

                <x-input id="celular" class="block mt-1 w-full" type="number" name="celular" :value="old('celular')" required  />
            </div>
            

            <!-- estado  -->
            <div class="mt-4">
                <x-label for="estado" :value="__('Estado')" />

                <x-input id="estado" class="block mt-1 w-full" type="string" name="estado" :value="old('estado')" required  />
            </div>

            <!-- cidade  -->
            <div class="mt-4">
                <x-label for="cidade" :value="__('Cidade')" />

                <x-input id="cidade" class="block mt-1 w-full" type="string" name="cidade" :value="old('cidade')" required  />
            </div>

            <!-- bairro  -->
            <div class="mt-4">
                <x-label for="bairro" :value="__('Bairro')" />

                <x-input id="bairro" class="block mt-1 w-full" type="string" name="bairro" :value="old('bairro')" required  />
            </div>

            <!-- rua  -->
            <div class="mt-4">
                <x-label for="rua" :value="__('Rua')" />

                <x-input id="rua" class="block mt-1 w-full" type="string" name="rua" :value="old('rua')" required  />
            </div>

            <!-- numero  -->
            <div class="mt-4">
                <x-label for="numero" :value="__('Numero')" />

                <x-input id="numero" class="block mt-1 w-full" type="string" name="numero" :value="old('numero')" required  />
            </div>

            <!-- complemento  -->
            <div class="mt-4">
                <x-label for="complemento" :value="__('Complemento')" />

                <x-input id="complemento" class="block mt-1 w-full" type="string " name="complemento" :value="old('complemento')" required  />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

{{-- <form action="{{route('prestador.store')}}" method="post">
    @csrf
    <input type="text" name="CPF" placeholder="cpf/cnpj">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="estado" placeholder="estado">
    <input type="text" name="cidade" placeholder="cidade">
    <input type="text" name="bairro" placeholder="bairro">
    <input type="text" name="rua" placeholder="rua">
    <input type="text" name="numero" placeholder="numero">
    <input type="text" name="complemento" placeholder="complemento">
    <input type="text" name="celular" placeholder="celular">
    <input type="submit" value="Enviar">
</form> --}}