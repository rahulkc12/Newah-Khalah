@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="min-h-screen flex items-center justify-center bg-neutral-100">
  <div class="w-full max-w-xl lg:mx-[120px] md:mx-[80px] sm:mx-[40px] bg-white border border-gray-200 rounded-2xl shadow-xl p-10">

     <!-- Logo -->
     <div class="flex justify-center mb-10">
        <a href="/">
        <img src="/img/image.png" class="h-20" alt="Logo">
        </a>
     </div>

     <!-- Login Form -->
     <form class="space-y-5">

        <!-- Email -->
        <div>
          <label class="block text-sm font-regular text-gray-800 mb-1">
            Email <span class="text-red-600">*</span>
          </label>
          <input type="email"
            placeholder="joe12@example.com"
            class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 focus:border-red-700">
        </div>

        <!-- Password -->
        <div>
          <label class="block text-sm font-regular text-gray-800 mb-1">
            Password <span class="text-red-600">*</span>
          </label>
          <div class="relative">
            <input id="password" type="password"
            placeholder="Enter your password"
              class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 pr-10 focus:border-red-700">
            <button
              type="button"
              onclick="togglePassword('password', this)"
              class="absolute right-3 top-[10px] text-gray-500">
                <i class="fa-regular fa-eye-slash"></i>
            </button>
          </div>
        </div>
        <div class="flex justify-center items-center mb-4"><a href="#" class="text-red-800 text-sm hover:underline">Forgot Password?</a></div>
        <x-button text="Login" :href="'/profile'" />
     </form>

     <!-- Divider -->
     <div class="flex items-center my-6">
       <div class="flex-grow border-t border-gray-300"></div>
       <span class="mx-3 text-sm text-gray-500">OR</span>
       <div class="flex-grow border-t border-gray-300"></div>
     </div>

     <!-- Social Icons -->
     <div class="flex justify-center space-x-6 mb-4">
        <img src="/img/google.png"  class="h-8 w-8" alt="Google">
        <img src="/img/fb.png"      class="h-8 w-8" alt="Facebook">
     </div>

     <!-- Sign up link  -->
     <p class="text-center text-sm text-gray-700">
       Don’t have an account?
       <a href="/signup" class="text-red-800 hover:underline">Sign up</a>
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
