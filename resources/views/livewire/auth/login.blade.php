<div class="flex flex-col gap-6">
    <x-auth-header class="text-primary"
                   :title="__('Log in to your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="!text-success text-center"
                           :status="session('status')" />

    <x-fieldset>
        <x-slot name="label">
            <p class="text-md text-base-content/50 font-semibold">Enter Your Credentials</p>
        </x-slot>
        <form wire:submit="login">
            <div class="space-y-6">
                <x-form.element label="email address">
                    <x-input.wrapper>
                        <x-input wire:model="email" />

                    </x-input.wrapper>
                    <x-error :messages="$errors->get('form.email')"
                             class="mt-2" />
                </x-form.element>

                <x-form.element label="password">
                    <x-input.wrapper>
                        <x-password-toggle>
                            <x-input wire:model="password"
                                     type="password"
                                     x-ref="password" />
                        </x-password-toggle>
                    </x-input.wrapper>
                    <x-error :messages="$errors->get('form.password')"
                             class="mt-2" />
                </x-form.element>
            </div>
            <a class="text-base-content/50 hover:text-primary/50 my-1 py-4"
               href="{{ route('password.request') }}">Forgot your password?</a>

            <button class="btn btn-primary btn-block mt-4 block"
                    type="submit"
                    wire:loading.class="opacity-50 duration-300 transition"
                    wire:target="login">
                <div class="between flex w-full items-center justify-center gap-x-4 text-center">
                    Login
                    <div class="hidden"
                         wire:loading
                         wire:target="login">
                        <x-filament::loading-indicator class="h-5 w-5" />
                    </div>
                </div>
            </button>
        </form>
    </x-fieldset>
    {{--  --}}

    @if (Route::has('register') && $canSwitchAuthPages)
        <div class="text-base-content/80 space-x-1 text-center text-sm">
            {{ __('Don\'t have an account?') }}
            <a class="link text-primary"
               href="{{ route('register') }}"
               wire:navigate>{{ __('Register') }}</a>
        </div>
    @endif
</div>
