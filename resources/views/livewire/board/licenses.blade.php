<x-slot:title>
    Licenses
</x-slot:title>

<x-slot:sub-title>
    Need to see your licenses ? how about expired ones
</x-slot:sub-title>


<div class="relative overflow-x-auto mt-8">
    <table class="w-full text-sm text-left rtl:text-right text-base-content">
        <thead class="text-xs  uppercase bg-base-200 text-base-content">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Plugin
                </th>
                <th scope="col" class="px-6 py-3">
                    Price 
                </th>
                <th scope="col" class="px-6 py-3">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Key
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($licenses as $license)
                <tr class="border-b bg-base-300 border-base-100"> 
                    <td class="px-6 py-4">{{ $license->product->name }}</td>
                    <td class="px-6 py-4">{{ $license->price->name }}</td>
                    <td class="px-6 py-4">{{ $license->key }}</td>
                    <td class="px-6 py-4">{{ $license->currency() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>