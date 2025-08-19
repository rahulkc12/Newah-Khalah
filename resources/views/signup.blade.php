@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="min-h-screen flex items-center justify-center bg-neutral-100 py-12 px-4 bg-cover">
    <div class="w-full max-w-xl lg:mx-[120px] md:mx-[80px] sm:mx-[40px] border border-gray-200 bg-white rounded-2xl shadow-xl p-10">

        <!-- Logo -->
        <div class="w-full flex justify-center mb-8">
            <a href="/">
            <img src="/img/image.png" class="h-20" alt="Logo">
            </a>
        </div>

        <form class="space-y-4">
            <!-- Email -->
            <div>
                <label class="block text-sm font-regular text-gray-800">Email <span class="text-red-600">*</span></label>
                <input type="email" placeholder="joe12@example.com"
                       class="mt-1 w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 focus:ring-0 focus:border-red-700">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-regular text-gray-800">Password <span class="text-red-600">*</span></label>
                <div class="relative">
                    <input id="password" type="password" placeholder="Enter your password"
                           class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 pr-10 focus:border-red-700">
                    <button type="button" onclick="togglePassword('password', this)"
                            class="absolute right-3 top-2.5 text-gray-500">
                        <i class="fa-regular fa-eye-slash"></i>
                    </button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-regular text-gray-800">Confirm Password <span class="text-red-600">*</span></label>
                <div class="relative">
                    <input id="confirmPassword" type="password" placeholder="Confirm your password"
                           class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 pr-10 focus:border-red-700">
                    <button type="button" onclick="togglePassword('confirmPassword', this)"
                            class="absolute right-3 top-2.5 text-gray-500">
                        <i class="fa-regular fa-eye-slash"></i>
                    </button>
                </div>
            </div>

            <!-- Terms -->
            <div class="flex items-center space-x-2">
                <input id="terms" type="checkbox" class="rounded border-gray-400">
                <label for="terms" class="text-sm">Accept our
                    <span class="text-red-800 underline">Terms and Conditions</span></label>
            </div>

            <!-- Signup button -->
            <x-button text="Signup" :href="'/profile'"/>
        </form>

        <!-- OR Divider -->
        <div class="flex items-center my-6">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="mx-4 text-gray-500 text-sm">OR</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <!-- Social -->
        <div class="flex items-center justify-center space-x-6 mb-6">
            <img src="/img/google.png" class="h-8 w-8" alt="Google">
            <img src="/img/fb.png" class="h-8 w-8" alt="Facebook">
        </div>

        <!-- Already have account -->
        <p class="text-center text-sm text-gray-700">
            Already have an account?
            <a href="/login" class="text-red-800 hover:underline">Sign in</a>
        </p>
    </div>
</div>

<script>
function togglePassword(id, btn){
    const field = document.getElementById(id);
    if(field.type === "password"){
        field.type = "text";
        btn.querySelector("i").classList.remove("fa-eye-slash");
        btn.querySelector("i").classList.add("fa-eye");
    } else {
        field.type = "password";
        btn.querySelector("i").classList.remove("fa-eye");
        btn.querySelector("i").classList.add("fa-eye-slash");
    }
}
</script>
