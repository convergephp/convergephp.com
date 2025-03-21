<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <x-fieldset x-data="form">
        <x-slot name="label">
            <p class="text-md font-semibold text-purple-500">Enter Your Credentials</p>
        </x-slot>
        <form wire:submit="register">
            <div class="space-y-6">
                <x-form.element label="Name">
                    <x-input.wrapper>
                        <x-input wire:model="name" />
                    </x-input.wrapper>
                    <x-error class="mt-2" :messages="$errors->get('username')" />
                </x-form.element>
                <x-form.element label="email address">
                    <x-input.wrapper>
                        <x-input wire:model="email" />
                    </x-input.wrapper>
                    <x-error class="mt-2" :messages="$errors->get('email')" />
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
                    <x-error class="mt-2" :messages="$errors->get('password')" />
                </x-form.element>
                <x-form.element for="password" label="password confirmation">
                    <x-input.wrapper>
                            <x-password-toggle>
                                <x-input
                                    wire:model="password_confirmation"
                                    type="password" 
                                    x-ref="password"
                                />
                            </x-password-toggle>
                    </x-input.wrapper>
                    <x-error class="mt-2" :messages="$errors->get('confirmation_password')" />
                </x-form.element>
            </div>

            <div class="py-4    ">
                <a class="my-1 px-4  text-purple-500 underline" href="{{ route('github.redirect') }}">Or register with GitHub</a>
            </div>
            <button 
                class="mt-4 flex w-full rounded-xl bg-purple-500 px-4 py-2 text-white"
                type="submit"
                wire:loading.class="opacity-50 duration-300 transition" 
                wire:target="register"
                >
                <div class="between flex text-center w-full items-center justify-center gap-x-4">
                    Register
                    <div class="hidden" wire:loading wire:target="register">
                        <x-filament::loading-indicator class="h-5 w-5" />
                    </div>
                </div>
            </button>
        </form>
    </x-fieldset>

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Name')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Full name')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirm password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirm password')"
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Create account') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
