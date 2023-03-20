<section>
    <header>
        <h2 class="text-2xl font-medium text-blue-900  ">
            {{ __('Información del Usuario') }}
        </h2>


    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>

            <x-input-label class="font-bold text-gray-900" for="name" :value="__('Nombre Completo:')" /><x-input-label for="name" :value="old('name', $user->name)" />

        </div>

        <div>
            <x-input-label class="font-bold text-gray-900"  for="email" :value="__('Correo Electrónico:')" />
            <x-input-label  for="email" :value="old('email', $user->email)" />


            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="mt-2 text-sm text-gray-800 ">
                        {{ __('Su correo electrónico no esta verificado') }}

                        <button form="send-verification" class="text-sm text-gray-600 underline rounded-md  hover:text-gray-900  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                            {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-sm font-medium text-green-600 ">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
{{--             <x-primary-button>{{ __('Guardar') }}</x-primary-button>
 --}}
            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="p-2 text-sm text-gray-600 "
                >{{ __('Guardado') }}</p>
            @endif
        </div>
    </form>
</section>
