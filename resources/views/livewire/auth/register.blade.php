<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <x-fieldset >
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
</div>
