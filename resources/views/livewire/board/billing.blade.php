<x-slot:title>
    Billing portal
</x-slot:title>

<x-slot:sub-title>
    Need to swap your licenses or updating you payment method ? 
</x-slot:sub-title>


<div>
    <div class="bg-white/5 shadow rounded-lg p-6 mt-8">
        <h4 class="text-xl font-semibold text-gray-200 mb-4">Manage Your Billing</h4>
        <p class="text-gray-400 mb-6">
            You're about to be redirected to the Paddle customer portal session, where you can manage your subscription, update payment methods, and download invoices. If you encounter any limitations in the portal, don't worry—we're actively working on enabling full billing management directly within <span class="text-primary font-semibold"><a href="/">Fluxtor</a></span>  
        </p>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('redirect.billing-portal') }}"
               class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600 transition-colors">
                Continue to Billing Portal
            </a>
        </div>
    </div>
</div>
