<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />


    <x-fieldset >
        <x-slot 
            name="label"
            >
            <p 
                class="text-md font-semibold text-purple-500">Enter Your Credentials</p>
        </x-slot>
        <form wire:submit="login">
            <div class="space-y-6">
                <x-form.element label="email address">
                    <x-input.wrapper>
                        <x-input 
                            wire:model="email"
                            />
                    
                    </x-input.wrapper>
                    <x-error 
                        :messages="$errors->get('form.email')" 
                        class="mt-2" />
                </x-form.element>

                <x-form.element label="password">
                    <x-input.wrapper>
                        <x-password-toggle>
                            <x-input
                                wire:model="password"
                                type="password" 
                                x-ref="password"
                            />
                        </x-password-toggle>
                    </x-input.wrapper>
                    <x-error 
                        :messages="$errors->get('form.password')" 
                        class="mt-2"
                        />
                </x-form.element>
            </div>
            <a class="my-1 px-2 py-2 text-slate-600 underline" href="{{ route('password.request') }}">Forgot your
                password?</a>
            <button 
                class="mt-4 flex w-full rounded-xl bg-primary px-4 py-2 text-white"
                type="submit"
                wire:loading.class="opacity-50 duration-300 transition" 
                wire:target="login"
                >
                <div class="between flex text-center w-full items-center justify-center gap-x-4">
                    Login
                    <div class="hidden" wire:loading wire:target="login">
                        <x-filament::loading-indicator class="h-5 w-5" />
                    </div>
                </div>
            </button>
        </form>
    </x-fieldset>
    {{--  --}}

    @if (Route::has('register'))
        <div class="space-x-1 text-center text-sm text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}" wire:navigate>{{ __('Register') }}</a>
        </div>
    @endif
</div>
