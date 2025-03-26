<x-slot:title>
    Transactions
</x-slot:title>

<x-slot:sub-title>
    take a look at your transactions, you can download you invoices also dude.
</x-slot:sub-title>

<div>


<div class="relative overflow-x-auto mt-8">
    <table class="w-full text-sm text-left rtl:text-right text-base-content">
        <thead class="text-xs  uppercase bg-base-200 text-base-content">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Billed At
                </th>
                <th scope="col" class="px-6 py-3">
                    Total
                </th>
                <th scope="col" class="px-6 py-3">
                    TAX
                </th>
                <th scope="col" class="px-6 py-3">
                    Currency
                </th>
                <th scope="col" class="px-6 py-3">
                    Invoice
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr class="border-b bg-base-300 border-base-100"> 
                    <td class="px-6 py-4">{{ $transaction->billed_at->toFormattedDateString() }}</td>
                    <td class="px-6 py-4">{{ $transaction->total() }}</td>
                    <td class="px-6 py-4">{{ $transaction->tax() }}</td>
                    <td class="px-6 py-4">{{ $transaction->currency() }}</td>
                    <td class="px-6 py-4 "><a href="{{ route('download-invoice', $transaction->id) }}" class="btn btn-ghost hover:btn-primary" target="_blank">Download</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
