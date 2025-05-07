<x-slot:title>
    Transactions
</x-slot:title>

<x-slot:sub-title>
    Take a look at your transactions, you can download your invoices also dude.
</x-slot:sub-title>

<div class="mb-2 w-full">
    <!-- Mobile view: Card-based layout -->
    <div class="mt-6 space-y-4 md:hidden">
        @foreach ($transactions as $transaction)
            <div class="bg-base-300 border-base-100 rounded-lg border p-4 shadow">
                <div class="mb-3 flex items-center justify-between">
                    <span class="text-sm font-medium">{{ $transaction->billed_at->toFormattedDateString() }}</span>
                    <span class="badge badge-primary">{{ $transaction->currency() }}</span>
                </div>
                <div class="mb-4 grid grid-cols-2 gap-2">
                    <div>
                        <p class="text-base-content/60 text-xs">Total</p>
                        <p class="font-semibold">{{ $transaction->total() }}</p>
                    </div>
                    <div>
                        <p class="text-base-content/60 text-xs">TAX</p>
                        <p class="font-semibold">{{ $transaction->tax() }}</p>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('download-invoice', $transaction->id) }}"
                       class="btn btn-sm btn-primary"
                       target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="mr-1 h-4 w-4"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                        </svg>
                        Download
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Desktop view: Table-based layout -->
    <div class="relative mt-8 hidden overflow-x-auto md:block">
        <table class="text-base-content w-full text-left text-sm rtl:text-right">
            <thead class="bg-base-200 text-base-content text-xs uppercase">
                <tr>
                    <th scope="col"
                        class="px-6 py-3">
                        Billed At
                    </th>
                    <th scope="col"
                        class="px-6 py-3">
                        Total
                    </th>
                    <th scope="col"
                        class="px-6 py-3">
                        TAX
                    </th>
                    <th scope="col"
                        class="px-6 py-3">
                        Currency
                    </th>
                    <th scope="col"
                        class="px-6 py-3">
                        Invoice
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr class="bg-base-300 border-base-100 hover:bg-base-200 border-b transition-colors">
                        <td class="px-6 py-4">{{ $transaction->billed_at->toFormattedDateString() }}</td>
                        <td class="px-6 py-4">{{ $transaction->total() }}</td>
                        <td class="px-6 py-4">{{ $transaction->tax() }}</td>
                        <td class="px-6 py-4">{{ $transaction->currency() }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('download-invoice', $transaction->id) }}"
                               class="btn btn-sm btn-ghost hover:btn-primary group"
                               target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="mr-1 h-4 w-4 group-hover:animate-bounce"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                </svg>
                                Download
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Empty state for no transactions -->
    @if (count($transactions) === 0)
        <div class="bg-base-200/50 mt-8 flex flex-col items-center justify-center rounded-lg py-12">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="text-base-content/30 h-16 w-16"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <h3 class="mt-4 text-lg font-medium">No transactions yet</h3>
            <p class="text-base-content/60 mt-1 text-sm">When you make a purchase, your transactions will appear here.
            </p>
        </div>
    @endif
</div>
