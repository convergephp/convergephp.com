<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('partials.navbar')

    <section class="bg-base-200 pt-[6rem]">
        {{ $slot }}
    </section>
</x-layout.base>
