<footer class="bg-black text-white py-2">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 border-b border-gray-600 pt-10 pb-10">
    
    <!-- Logo & Description -->
    <div class="space-y-6">
      <img src="{{ asset('img/image.png') }}" alt="Newah_khalah_logo" class="h-28 w-auto">
      <p class="text-base font-regular leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <div class="flex space-x-2">
           <x-secondarybutton href="#" text="Login" />
            <x-button href="#" text="Signup" />
        </div>
    </div>

    <!-- Quick Links -->
    <div class="space-y-3 md:pl-10">
      <h2 class="text-lg font-medium ">Quick Links</h2>
      <ul class="space-y-2 text-base">
        <li><a href="#" class="hover:text-primary-500 font-regular">About Us</a></li>
        <li><a href="#" class="hover:text-primary-500 font-regular">Events</a></li>
        <li><a href="#" class="hover:text-primary-500 font-regular">Get Involved</a></li>
        <li><a href="#" class="hover:text-primary-500 font-regular">Donate</a></li>
        <li><a href="#" class="hover:text-primary-500 font-regular">Gallery</a></li>
      </ul>
    </div>

    <!-- Contact & Social -->
    <div class="space-y-4">
      <h2 class="text-lg font-medium">Contact us</h2>
      <div class="space-y-2 text-base">
        <div class="flex items-center space-x-2">
          <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.66675 12H17.6667" stroke="#FCF8F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7.66675 8H13.6667" stroke="#FCF8F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.66669 20.2895V5C3.66669 3.89543 4.56212 3 5.66669 3H19.6667C20.7713 3 21.6667 3.89543 21.6667 5V15C21.6667 16.1046 20.7713 17 19.6667 17H8.62794C8.02037 17 7.44575 17.2762 7.0662 17.7506L4.73521 20.6643C4.3809 21.1072 3.66669 20.8567 3.66669 20.2895Z" stroke="#FCF8F7" stroke-width="1.5"/>
          </svg>

          <span>kenz.lawson@example.com</span>
        </div>
        <div class="flex items-center space-x-2">
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_308_572)">
            <path d="M13.2083 4.66659C14.0223 4.82539 14.7703 5.22347 15.3567 5.80986C15.9431 6.39626 16.3412 7.14431 16.5 7.95825M13.2083 1.33325C14.8994 1.52112 16.4763 2.2784 17.6802 3.48076C18.8841 4.68312 19.6433 6.25909 19.8333 7.94992M19 14.5999V17.0999C19.0009 17.332 18.9534 17.5617 18.8604 17.7744C18.7675 17.987 18.6311 18.1779 18.4601 18.3348C18.2891 18.4917 18.0872 18.6112 17.8673 18.6855C17.6474 18.7599 17.4145 18.7875 17.1833 18.7666C14.619 18.488 12.1558 17.6117 9.99167 16.2083C7.9782 14.9288 6.27112 13.2217 4.99167 11.2083C3.58332 9.03426 2.70687 6.55908 2.43334 3.98325C2.41251 3.75281 2.4399 3.52055 2.51376 3.30127C2.58761 3.08199 2.70631 2.88049 2.86231 2.7096C3.01831 2.53871 3.20818 2.40218 3.41983 2.30869C3.63149 2.2152 3.86029 2.1668 4.09167 2.16659H6.59167C6.99609 2.1626 7.38817 2.30582 7.69481 2.56953C8.00145 2.83324 8.20174 3.19946 8.25834 3.59992C8.36386 4.39997 8.55955 5.18552 8.84167 5.94159C8.95379 6.23986 8.97806 6.56401 8.91159 6.87565C8.84513 7.18729 8.69072 7.47334 8.46667 7.69992L7.40834 8.75825C8.59464 10.8445 10.3221 12.572 12.4083 13.7583L13.4667 12.6999C13.6932 12.4759 13.9793 12.3215 14.2909 12.255C14.6026 12.1885 14.9267 12.2128 15.225 12.3249C15.9811 12.607 16.7666 12.8027 17.5667 12.9083C17.9715 12.9654 18.3412 13.1693 18.6055 13.4812C18.8697 13.7931 19.0101 14.1912 19 14.5999Z" stroke="#FCF8F7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <defs>
            <clipPath id="clip0_308_572">
            <rect width="20" height="20" fill="white" transform="translate(0.666687 0.5)"/>
            </clipPath>
            </defs>
        </svg>
        <span>(225) 555-0118</span>
        </div>
      </div>
      <div>
        <p class="mb-2 text-lg font-medium">Follow us</p>
        <div class="flex space-x-3">
          <img src="img/fb.png" alt="Facebook" class="w-8 h-8">
          <img src="img/insta.png" alt="Instagram" class="w-8 h-8">
          <img src="img/twitter.png" alt="Twitter" class="w-8 h-8">
          <img src="img/whatsapp.png" alt="WhatsApp" class="w-8 h-8">
        </div>
      </div>
    </div>

  </div>

  <!-- Footer Bottom -->
  <div class="text-center text-sm text-gray-300 mt-1 h-6">
    Copyright © 2023 Newa Khala. All Rights Reserved.
    <span class="block md:inline ">Powered By <a href="#" class="text-red-800">Delta-V Logics and Solutions</a></span>
  </div>
</footer>
