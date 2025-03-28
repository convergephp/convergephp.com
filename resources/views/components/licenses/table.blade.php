@props(['licenses'])
@php
    $licenses = [
        (object) [
            'product' => (object) ['name' => 'Pro Suite'],
            'price' => (object) ['name' => 'Monthly', 'amount' => '29.99€'],
            'key' => 'ABC1DEF2GHI3JKL4',
        ],
        (object) [
            'product' => (object) ['name' => 'Developer Edition'],
            'price' => (object) ['name' => 'Annual', 'amount' => '499.99€'],
            'key' => 'MNO5PQR6STU7VWX8',
        ],
    ];
@endphp

<div class="w-full overflow-auto rounded-lg">
    {{-- Desktop view --}}
    <table class="text-base-content border-base-300 hidden w-full rounded-lg text-left text-sm md:table rtl:text-right">
        <thead class="bg-base-300 text-base-content text-xs uppercase">
            <tr>
                <th scope="col"
                    class="px-6 py-3">
                    package
                </th>
                <th scope="col"
                    class="px-6 py-3">
                    price name
                </th>
                <th scope="col"
                    class="px-6 py-3">
                    amount
                </th>
                <th scope="col"
                    class="px-6 py-3">
                    key
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($licenses as $license)
                <tr class="bg-base-100 text-base-content/70 border-base-100/50 border-b">
                    <td class="px-6 py-4">{{ $license->product->name }}</td>
                    <td class="px-6 py-4">{{ $license->price->name }}</td>
                    <td class="px-6 py-4">{{ $license->price->amount }}</td>
                    <td class="relative cursor-pointer select-none px-6 py-4 font-mono"
                        x-data="{ copied: false }"
                        x-on:click="navigator.clipboard.writeText('{{ $license->key }}').then(() => { copied = true; setTimeout(() => copied = false, 2000); })"
                        aria-label="Click to copy">
                        <span>{{ substr($license->key, 0, 4) }} **** {{ substr($license->key, -4) }}</span>
                        <!-- TOOLTIP -->
                        <span x-show="copied"
                              style="display: none;"
                              class="bg-primary text-primary-content absolute left-1/2 top-[-28px] -translate-x-1/2 transform rounded-md px-2 py-1 text-xs shadow-md">
                            Copied!
                        </span>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Mobile view table --}}
    <div class="space-y-4 md:hidden">
        @foreach ($licenses as $license)
            <div class="bg-base-100 border-base-100 rounded-lg border p-4 shadow">
                <div class="grid grid-cols-2 gap-2">
                    <div class="text-base-content/40 text-xs font-semibold uppercase">Package</div>
                    <div class="text-base-content">{{ $license->product->name }}</div>

                    <div class="text-base-content/40 text-xs font-semibold uppercase">Price name</div>
                    <div class="text-base-content">{{ $license->price->name }}</div>

                    <div class="text-base-content/40 text-xs font-semibold uppercase">Amount</div>
                    <div class="text-base-content">{{ $license->price->amount }}</div>

                    <div class="text-base-content/40 text-xs font-semibold uppercase">Key</div>
                    <div class="text-base-content relative cursor-pointer select-none font-mono"
                         x-data="{ copied: false }"
                         x-on:click="navigator.clipboard.writeText('{{ $license->key }}').then(() => { copied = true; setTimeout(() => copied = false, 2000); })"
                         aria-label="Click to copy">
                        <span>{{ substr($license->key, 0, 4) }} **** {{ substr($license->key, -4) }}</span>
                        <!-- TOOLTIP -->
                        <span x-show="copied"
                              style="display: none;"
                              class="bg-primary text-primary-content absolute left-1/2 top-[-28px] -translate-x-1/2 transform rounded-md px-2 py-1 text-xs shadow-md">
                            Copied!
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
