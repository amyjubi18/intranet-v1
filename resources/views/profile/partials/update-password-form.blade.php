<section>
    <header>
        <h2 class="text-2xl font-medium text-blue-900 ">
            {{ __('Cambiar Contraseña') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 ">
            {{ __('Asegúrese de que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" class="font-bold text-gray-900" :value="__('Contraseña Actual')" />
            <x-text-input id="current_password" name="current_password" type="password" class="block w-full mt-1" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="font-bold text-gray-900" for="password" :value="__('Nueva Contraseña')" />
            <x-text-input id="password" name="password" type="password" class="block w-full mt-1" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label class="font-bold text-gray-900" for="password_confirmation" :value="__('Confirmar Contraseña')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="block w-full mt-1" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="p-2 text-sm text-gray-600 p- "
                >{{ __('Guardado') }}</p>
            @endif
        </div>
    </form>
</section>
