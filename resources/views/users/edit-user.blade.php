<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <h1>Editando Cavaleiro  <strong>{{ $user->name }}</strong></h1>
        </x-slot>

        <x-validation-errors class="mb-4"/>
        <form method="POST" action="{{ route( 'users.update', $user->id) }}">
            @method('PUT')
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}"/>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}" required
                         autofocus autocomplete="name"/>
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}"/>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}"
                         required autocomplete="username"/>
            </div>
            <div class="mt-4">
                <x-label for="cpf" value="{{ __('CPF') }}"/>
                <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" value="{{ $user->cpf }}" required
                         autocomplete="cpf" disabled />
            </div>
            <div class="mt-4">
                <x-label for="phone" value="{{ __('Telefone') }}"/>
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $user->phone }}"
                         required
                         autocomplete="phone"/>
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}"/>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="new-password" value="{{ $user->password }}" disabled/>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                         name="password_confirmation" required autocomplete="new-password" value="{{ $user->password }}" disabled/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('login') }}">
                    {{ __('Voltar a tela anterior') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-button>

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
