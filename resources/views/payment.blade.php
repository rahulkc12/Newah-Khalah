@vite('resources/css/app.css')
<div class="min-h-screen flex items-center justify-center bg-neutral-100">
<div class="w-full lg:mx-[120px] md:mx-[80px] sm:mx-[40px] px-6 py-12 grid lg:grid-cols-2 gap-8">

    <!-- Left: Payment Summary -->
    <div class="bg-white border border-gray-300 rounded-xl p-8">
        <h3 class="text-xl font-semibold text-center mb-8">Payment Information</h3>

        <div class="flex justify-between mb-4">
            <span class="font-medium">Donation</span>
        </div>
        <div class="h-full justify-between">
        <div class="flex justify-between">
            <span>One-time Donation</span>
            <span class="font-medium">$25</span>
        </div>
        <div>
        <hr class="my-8 border-gray-300">

        <div class="flex justify-between text-lg font-semibold">
            <span>Total</span>
            <span class="text-red-700">$25</span>
        </div>
        </div>
        </div>
    </div>


    <!-- Right: Card Information -->
    <div class="bg-white rounded-xl border border-gray-200 shadow-md p-10">
        <div class="flex justify-center mb-8">
            <a href="/">
        <img src="/img/image.png" class="h-20" alt="Logo">
        </a>
        </div>

        <h3 class="text-xl font-semibold text-center mb-8">Card Information</h3>

        <form class="space-y-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-regular text-gray-800 mb-1">First Name <span class="text-red-600">*</span></label>
                    <input type="text" class="w-full rounded-md border  border-gray-300 px-4 py-2 text-gray-500" placeholder="Joe"/>
                </div>
                <div>
                    <label class="block text-sm font-regular text-gray-800 mb-1">Last Name <span class="text-red-600">*</span></label>
                    <input type="text" class="w-full rounded-md border  border-gray-300 px-4 py-2 text-gray-500" placeholder="David"/>
                </div>
            </div>

            <div>
                <label class="block text-sm font-regular text-gray-800 mb-1">Card Number <span class="text-red-600">*</span></label>
                <input type="text" class="w-full rounded-md border px-4 py-2  border-gray-300 text-gray-500" placeholder="XXXXXXXXXXXXXXXX"/>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-regular text-gray-800 mb-1">Expiry Date <span class="text-red-600">*</span></label>
                    <input type="text" class="w-full rounded-md border px-4 py-2  border-gray-300 text-gray-500" placeholder="XX/XX"/>
                </div>
                <div>
                    <label class="block text-sm font-regular text-gray-800 mb-1">CVV <span class="text-red-600">*</span></label>
                    <input type="text" class="w-full rounded-md border px-4 py-2  border-gray-300 text-gray-500" placeholder="XXX"/>
                </div>
            </div>

            <x-button text="Pay" />
        </form>
    </div>
</div>
