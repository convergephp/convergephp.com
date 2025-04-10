<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('components.partials.navbar')

    <section class="px-4 pt-[10rem]">
        <div class="m-auto max-w-2xl">
            {{ $slot }}
        </div>
    </section>
</x-layout.base>
