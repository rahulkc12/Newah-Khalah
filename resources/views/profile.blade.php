@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script>

<x-navbar />
<x-banner :title="'Welcome Back'" :text="'Update your details, manage documents, and more.'" />
<div x-data="{activeTab: 'profile'}"
     class="max-w-7xl lg:mx-[120px] md:mx-[80px] sm:mx-[40px] px-4 lg:px-0 py-10 grid grid-cols-1 lg:grid-cols-3 gap-6">

    <!-- Sidebar -->
    <div class="bg-white border border-gray-100 shadow-md rounded-xl p-6 space-y-4">
        <div class="sticky top-36 right-0">
        <div class="flex flex-col items-center mb-4">
           <!-- Profile Picture with Upload -->
            <div
  x-data="{
      photo: null,
      preview: null,
      updatePreview(e) {
          const reader = new FileReader()
          reader.onload = (r) => { this.preview = r.target.result }
          reader.readAsDataURL(e.target.files[0])
      }
  }"
  class="flex flex-col items-center space-y-2"
>
    <!-- Image preview -->
    <div class="w-28 h-28 rounded-full bg-gray-200 overflow-hidden mb-2">
        <img x-show="preview" :src="preview" class="w-full h-full object-cover">
    </div>
    <div class="bg-red-800 text-white text-sm border border-red-800 px-4 py-2 rounded-full">Volunteer</div>
    <!-- Change button -->
    <label for="photoInput" class="text-red-800 text-md cursor-pointer hover:underline">Change Profile</label>
    <input id="photoInput" type="file" class="hidden" accept="image/*" @change="updatePreview($event)">
            </div>

        </div>

        <div class="space-y-2 text-center">
            <button
                @click="activeTab='profile'"
                :class="activeTab === 'profile' ? 'bg-gray-200 text-black' : ''"
                class="w-full h-[44px] py-2 rounded-lg">
                Profile
            </button>
            <button @click="activeTab='documents'" :class="activeTab==='documents' ? 'bg-gray-200':''"
                    class="w-full h-[44px] py-2 rounded-lg">
                My Documents
            </button>
            <button @click="activeTab='events'" :class="activeTab==='events' ? 'bg-gray-200':''"
                    class="w-full h-[44px] py-2 rounded-lg">
                My Events
            </button>
            <button @click="activeTab='donations'" :class="activeTab==='donations' ? 'bg-gray-200':''"
                    class="w-full h-[44px] py-2 rounded-lg">
                My Donations
            </button>
            <button @click="activeTab='security'" :class="activeTab==='security' ? 'bg-gray-200':''"
                    class="w-full h-[44px] py-2 rounded-lg">
                Security
            </button>
        </div>
        </div>
    </div>

    <!-- Content Pane -->
    <div class="lg:col-span-2">
        <div class="grid grid-cols-1 lg:grid-cols-2">
        <!-- PROFILE TAB -->
        <div x-show="activeTab==='profile'" class="space-y-4 cols-span-2">
            <h3 class="text-xl font-semibold">Profile</h3>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <div class="mb-1"><label class="text-sm font-regular mb-1">First Name *</label>
                    </div>
                    <input type="text" placeholder="Joe" class="w-full border border-gray-300 text-gray-500  rounded-md px-4 py-2">
                </div>
                <div>
                    <div class="mb-1"><label class="text-sm font-regular mb-1">Last Name *</label>
                    </div>
                    <input type="text" placeholder="David" class="w-full border border-gray-300 text-gray-500  rounded-md px-4 py-2">
                </div>
                <div class="md:col-span-2">
                    <div class="mb-1"><label class="text-sm font-regular mb-1">Email *</label>
                    </div>
                    <input type="email" placeholder="joe12@example.com" class="w-full border border-gray-300 text-gray-500  rounded-md px-4 py-2">
                </div>
                <div class="md:col-span-2">
                    <div class="mb-1"><label class="text-sm font-regular mb-1">Phone Number</label>
                    </div>
                    <input type="text" placeholder="(444) 1234-5678" class="w-full border border-gray-300 text-gray-500  rounded-md px-4 py-2">
                </div>
                <div class="md:col-span-2">
                    <div class="mb-1"><label class="text-sm font-regular mb-1">Date of Birth *</label>
                    </div>
                    <input type="date" class="w-full border border-gray-300 text-gray-500  rounded-md px-4 py-2">
                </div>
                <div class="md:col-span-2">
                    <div class="mb-1"><label class="text-sm font-regular mb-1">Address 1</label>
                    </div>
                    <input type="text"
                           class="w-full border border-gray-300 text-gray-500 rounded-md px-4 py-2"
                           placeholder="Teliwara Chowk, Shrinath Market 1st Floor, Sadar Bazar">
                </div>
            </div>

            <x-button text="Save Changes" class="cols-span-1" />
        </div>
        <!-- SECURITY TAB -->
        <div x-show="activeTab==='security'" class="space-y-4 cols-span-2">
    <h3 class="text-xl font-semibold">Security</h3>
    
    <div class="space-y-4">
        <!-- current Password -->
            <div>
                <label class="block text-sm font-regular text-gray-800 mb-1">Current Password <span class="text-red-600">*</span></label>
                <div class="relative">
                    <input id="currentPassword" type="password" placeholder="Enter your current password"
                           class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 pr-10 focus:border-red-700">
                    <button type="button" onclick="togglePassword('password', this)"
                            class="absolute right-3 top-2.5 text-gray-500">
                        <i class="fa-regular fa-eye-slash"></i>
                    </button>
                </div>
            </div>

        <!-- new Password -->
            <div>
                <label class="block text-sm font-regular text-gray-800 mb-1">Password <span class="text-red-600">*</span></label>
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
                <label class="block text-sm font-regular text-gray-800 mb-1">Confirm Password <span class="text-red-600">*</span></label>
                <div class="relative">
                    <input id="confirmPassword" type="password" placeholder="Confirm your password"
                           class="w-full rounded-md border border-gray-300 text-gray-500 px-4 py-2 pr-10 focus:border-red-700">
                    <button type="button" onclick="togglePassword('confirmPassword', this)"
                            class="absolute right-3 top-2.5 text-gray-500">
                        <i class="fa-regular fa-eye-slash"></i>
                    </button>
                </div>
            </div>

        <x-button text="Save Changes" class="cols-span-1" />
        </div>

        </div>
        {{-- my documents tab --}}
        <div x-show="activeTab==='documents'" class="space-y-4">
            <h3 class="text-xl font-semibold">My Documents</h3>
            <p class="text-gray-600">Manage your documents and files here.</p>
        </div>
        {{-- my events tab --}}
        <div x-show="activeTab==='events'" class="space-y-4">
            <h3 class="text-xl font-semibold">My Events</h3>
            <p class="text-gray-600">View and manage your events here.</p>
        </div>
        {{-- my donations tab --}}
        <div x-show="activeTab==='donations'" class="space-y-4">
            <h3 class="text-xl font-semibold">My Donations</h3>
            <p class="text-gray-600">View and manage your donations here.</p>
        </div>

    </div>
</div>
</div>

<x-footer />
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
