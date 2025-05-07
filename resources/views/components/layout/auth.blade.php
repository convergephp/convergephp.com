<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('components.partials.navbar')

    <section class="px-4 py-[4rem] md:py-[6rem]">
        <div class="m-auto max-w-2xl">
            {{ $slot }}
        </div>
    </section>
</x-layout.base>
