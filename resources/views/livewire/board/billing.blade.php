<x-slot:title>
    Billing portal
</x-slot:title>

<x-slot:sub-title>
    Need to swap your licenses or updating your invoices infos ?
</x-slot:sub-title>

<div>
    <div class="mt-8 rounded-lg p-6 shadow">
        <h4 class="text-base-content mb-4 text-xl font-semibold">Manage Your Billing</h4>
        <p class="text-base-content/50 mb-6">
            You're about to be redirected to the Paddle customer portal session, where you can manage your payment's
            history, update payment methods, and download invoices.
        </p>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('boards.billing-portal') }}"
               target="_blank"
               class="bg-primary text-primary-content hover:bg-primary/90 rounded px-4 py-2 transition-colors">
                Continue to Billing Portal
            </a>
        </div>
    </div>
</div>
