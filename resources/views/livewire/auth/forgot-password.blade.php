 <div class="flex flex-col gap-6">
     <x-auth-header :title="__('Forgot password')"
                    :description="__('Enter your email to receive a password reset link')" />

     <!-- Session Status -->
     <x-auth-session-status class="text-center"
                            :status="session('status')" />

     <x-fieldset>
         <x-slot name="label">
             <p class="text-md text-base-content/50 font-semibold">Enter Your Email address</p>
         </x-slot>
         <form wire:submit="sendPasswordResetLink"
               class="flex flex-col gap-6">
             <!-- Email Address -->
             <x-form.element label="email address">
                 <x-input.wrapper>
                     <x-input wire:model="email"
                              placeholder="email@example.com" />

                 </x-input.wrapper>
                 <x-error :messages="$errors->get('form.email')"
                          class="mt-2" />
             </x-form.element>

             <button class="btn btn-primary btn-block mt-4 block"
                     type="submit"
                     wire:loading.class="opacity-50 duration-300 transition"
                     wire:target="login">
                 <div class="between flex w-full items-center justify-center gap-x-4 text-center">
                     Email password reset link
                     <div class="hidden"
                          wire:loading
                          wire:target="login">
                         <x-filament::loading-indicator class="h-5 w-5" />
                     </div>
                 </div>
             </button>
         </form>
     </x-fieldset>

     @if (Route::has('login'))
         <div class="text-base-content/80 space-x-1 text-center text-sm">
             Or, return to
             <a class="link text-primary"
                href="{{ route('login') }}"
                wire:navigate>Login</a>
         </div>
     @endif
 </div>
