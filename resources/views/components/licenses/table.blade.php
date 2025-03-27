@props([
    'licenses'
])
<table class="w-full text-sm text-left rtl:text-right text-base-content">
    <thead class="text-xs  uppercase bg-base-200 text-base-content">
        <tr>
            <th scope="col" class="px-6 py-3">
                package
            </th>
            <th scope="col" class="px-6 py-3">
                price name
            </th>
            <th scope="col" class="px-6 py-3">
                amount
            </th>
            <th scope="col" class="px-6 py-3">
                key
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($licenses as $license)
            <tr class="border-b bg-base-300 border-base-100"> 
                <td class="px-6 py-4">{{ $license->product->name }}</td>
                <td class="px-6 py-4">{{ $license->price->name }}</td>
                <td class="px-6 py-4">{{ $license->price->amount }}</td>
                <td class="px-6 py-4 relative font-mono cursor-pointer select-none"
                    x-data="{ copied: false }"
                    x-on:click="navigator.clipboard.writeText('{{ $license->key }}').then(() => { copied = true; setTimeout(() => copied = false, 2000); })"
                    aria-label="Click to copy">
                    
                    <span>{{ substr($license->key, 0, 4) }} **** {{ substr($license->key, -4) }}</span>

                    <!-- TOOLTIP -->
                    <span x-show="copied" style="display: none;"
                        class="absolute top-[-28px] left-1/2 transform -translate-x-1/2 bg-primary text-primary-content text-xs px-2 py-1 rounded-md shadow-md">
                        Copied!
                    </span>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>