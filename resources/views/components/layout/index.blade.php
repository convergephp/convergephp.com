<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('components.partials.navbar')

    <section class="bg-base-200 pt-[6rem]">
        {{ $slot }}
    </section>
</x-layout.base>
