<x-slot:title>
    Billing portal
</x-slot:title>

<x-slot:sub-title>
    Need to swap your licenses or updating your invoices infos ? 
</x-slot:sub-title>


<div>
    <div class="bg-white/5 shadow rounded-lg p-6 mt-8">
        <h4 class="text-xl font-semibold text-gray-200 mb-4">Manage Your Billing</h4>
        <p class="text-gray-400 mb-6">
            You're about to be redirected to the Paddle customer portal session, where you can manage your payment's history, update payment methods, and download invoices.
        </p>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('boards.billing-portal') }}"
                target="_blank"
               class="px-4 py-2 bg-primary text-primary-content rounded hover:bg-primary/90 transition-colors">
                Continue to Billing Portal
            </a>
        </div>
    </div>
</div>
