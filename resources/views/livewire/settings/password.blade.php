<x-slot:title>
    Update Password
</x-slot:title>

<x-slot:sub-title>
    Need to tweak your password ?
</x-slot:sub-title>
<section class="mx-auto w-full md:max-w-xl">

    <form class="mt-6 space-y-6"
          wire:submit="updatePassword">

        <x-form.element label="Current password">
            <x-input.wrapper>
                <x-password-toggle>
                    <x-input type="password"
                             wire:model="current_password"
                             required
                             autocomplete="new-password" />
                </x-password-toggle>
            </x-input.wrapper>
            <x-error class="mt-2"
                     :messages="$errors->get('password')" />
        </x-form.element>

        <x-form.element label="password">
            <x-input.wrapper>
                <x-password-toggle>
                    <x-input type="password"
                             wire:model="password"
                             autocomplete="new-password"
                             required />
                </x-password-toggle>
            </x-input.wrapper>
            <x-error class="mt-2"
                     :messages="$errors->get('password')" />
        </x-form.element>

        <x-form.element for="password"
                        label="password confirmation">
            <x-input.wrapper>
                <x-password-toggle>
                    <x-input type="password"
                             wire:model="password_confirmation"
                             required />
                </x-password-toggle>
            </x-input.wrapper>
            <x-error class="mt-2"
                     :messages="$errors->get('confirmation_password')" />
        </x-form.element>

        <div class="my-4 flex items-center gap-4">
            <div class="flex items-center justify-end">
                <button type="submit"
                        class="btn btn-md btn-primary">{{ __('Save') }}</button>
            </div>

            <x-action-message class="me-3"
                              on="password-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
