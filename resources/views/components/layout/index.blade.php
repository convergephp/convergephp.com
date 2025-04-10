<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('components.partials.navbar')

    <section class="bg-base-200 pt-[3rem] md:pt-[5rem]">
        {{ $slot }}
    </section>
</x-layout.base>
