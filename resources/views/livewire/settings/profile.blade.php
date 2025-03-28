<x-slot:title>
    Profile Account
</x-slot:title>

<x-slot:sub-title>
    Need to tweak a profile setting?
</x-slot:sub-title>

<section class="mx-auto max-w-3xl">

        <form class="my-6 w-full space-y-6" wire:submit="updateProfileInformation">

            <x-form.element :label="__('Name')">
                <x-input.wrapper>
                    <x-input wire:model="name" required autofocus autocomplete="name" />
                </x-input.wrapper>
                <x-error class="mt-2" :messages="$errors->get('form.email')" />
            </x-form.element>

            <div>
                <x-form.element :label="__('Email')">
                    <x-input.wrapper>
                        <x-input wire:model="email" autocomplete="email" />
                    </x-input.wrapper>
                    <x-error class="mt-2" :messages="$errors->get('form.email')" />
                </x-form.element>

                @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                    <div>
                        <p class="mt-4">
                            {{ __('Your email address is unverified.') }}

                            <a class="cursor-pointer text-sm" wire:click.prevent="resendVerificationNotification">
                                {{ __('Click here to re-send the verification email.') }}
                            </a>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="!dark:text-green-400 mt-2 font-medium !text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center justify-end">
                    <button class="w-full btn btn-md btn-primary" type="submit">{{ __('Save') }}</button>
                </div>

                <x-action-message class="me-3 " on="profile-updated">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </form>

</section>
