<x-layout.base>
    {{-- NAVBARE HEADER --}}
    @include('components.partials.navbar')

    <section class="bg-base-200">
        {{ $slot }}
    </section>
</x-layout.base>
