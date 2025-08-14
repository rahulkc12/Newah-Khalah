@vite('resources/css/app.css')

<x-navbar />
<x-banner :title="' Contact Us – We’d Love to Hear From You'" :text="'Reach Out. Connect. Be Part of the Community.'"/>
<section class="lg:mx-[120px] md:mx-[80px] sm:mx-[40px] m-20 grid lg:grid-cols-2 sm:grid-cols-1 gap-6">

    <!-- Left: Map + Contact Info -->
    <div class="space-y-10">

      <!-- Map Card -->
      <div class="relative rounded-xl overflow-hidden shadow-md">
        <iframe
          class="w-full h-64"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1403.701317852655!2d-73.83301581813838!3d40.76220097085758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2600feab8eaf3%3A0xf2c8bcc288c78f3!2s123%20Main%20St%2C%20Queens%2C%20NY%2010001%2C%20USA!5e0!3m2!1sen!2snp!4v1755162203325!5m2!1sen!2snp"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>

        {{-- <a href="https://maps.google.com" target="_blank"
           class="absolute bottom-4 left-4 right-4 m-4">
          <x-secondarybutton text="View on Map" />
        </a> --}}
      </div>

      <!-- Location Info -->
      <div>
        <h3 class="text-xl font-semibold text-red-800 mb-2">Location</h3>
        <p class="text-gray-700 flex items-center gap-2">
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 1C12.5709 1 14.2964 1.73161 15.375 2.77734C16.454 3.82352 17 5.29446 17 7C17 8.76902 16.4152 11.8738 15.167 14.5137C13.8898 17.2147 12.139 19 10 19C7.861 19 6.11025 17.2147 4.83301 14.5137C3.58476 11.8738 3 8.76902 3 7C3 5.29446 3.546 3.82352 4.625 2.77734C5.70359 1.73161 7.42908 1 10 1Z" stroke="#333333" stroke-width="2"/>
<path d="M12.5 7.54999C12.5 8.9307 11.3807 10.05 10 10.05C8.61929 10.05 7.5 8.9307 7.5 7.54999C7.5 6.16928 8.61929 5.04999 10 5.04999C11.3807 5.04999 12.5 6.16928 12.5 7.54999Z" fill="#333333"/>
</svg>

          Newah Cultural Center, 123 Main Street, Queens, NY 11375
        </p>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="text-xl font-semibold text-red-800 mb-2">Contact Information</h3>
        <p class="text-gray-600 mb-2">Need help or want to discuss a large gift or sponsorship?</p>
        <div class=" text-gray-600 flex flex-col gap-2">
            <div class="flex items-center space-x-2">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7 12H17" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7 8H13" stroke="#333333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3 20.2895V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V15C21 16.1046 20.1046 17 19 17H7.96125C7.35368 17 6.77906 17.2762 6.39951 17.7506L4.06852 20.6643C3.71421 21.1072 3 20.8567 3 20.2895Z" stroke="#333333" stroke-width="1.5"/>
            </svg>
            <span>kenz.lawson@example.com</span>
        </div>
        <div class="flex items-center space-x-2">
          <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_120_1230)">
<path d="M12.5415 4.66671C13.3555 4.82551 14.1035 5.22359 14.6899 5.80999C15.2763 6.39639 15.6744 7.14443 15.8332 7.95837M12.5415 1.33337C14.2326 1.52124 15.8095 2.27852 17.0134 3.48088C18.2173 4.68324 18.9765 6.25922 19.1665 7.95004M18.3332 14.6V17.1C18.3341 17.3321 18.2866 17.5618 18.1936 17.7745C18.1006 17.9871 17.9643 18.178 17.7933 18.3349C17.6222 18.4918 17.4203 18.6113 17.2005 18.6856C16.9806 18.76 16.7477 18.7876 16.5165 18.7667C13.9522 18.4881 11.489 17.6118 9.32486 16.2084C7.31139 14.9289 5.60431 13.2219 4.32486 11.2084C2.91651 9.03438 2.04007 6.5592 1.76653 3.98337C1.7457 3.75293 1.77309 3.52067 1.84695 3.30139C1.9208 3.08211 2.03951 2.88061 2.1955 2.70972C2.3515 2.53883 2.54137 2.4023 2.75302 2.30881C2.96468 2.21532 3.19348 2.16693 3.42486 2.16671H5.92486C6.32929 2.16273 6.72136 2.30594 7.028 2.56965C7.33464 2.83336 7.53493 3.19958 7.59153 3.60004C7.69705 4.4001 7.89274 5.18565 8.17486 5.94171C8.28698 6.23998 8.31125 6.56414 8.24479 6.87577C8.17832 7.18741 8.02392 7.47347 7.79986 7.70004L6.74153 8.75837C7.92783 10.8447 9.65524 12.5721 11.7415 13.7584L12.7999 12.7C13.0264 12.476 13.3125 12.3216 13.6241 12.2551C13.9358 12.1887 14.2599 12.2129 14.5582 12.325C15.3143 12.6072 16.0998 12.8029 16.8999 12.9084C17.3047 12.9655 17.6744 13.1694 17.9386 13.4813C18.2029 13.7932 18.3433 14.1914 18.3332 14.6Z" stroke="#333333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_120_1230">
<rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
</clipPath>
</defs>
            </svg>

        <span>(225) 555-0118</span>
        </div>
        </div>
      </div>
    </div>

    <!-- Right: Contact Form -->
    <div class="bg-white border border-gray-200 rounded-2xl p-[32px] shadow-md">
      <h2 class="text-2xl font-semibold mb-6 text-center">Contact Us</h2>
      <form class="space-y-4">
         <div class="flex flex-col md:flex-row md:space-x-4 space-y-4 md:space-y-0">
            <div class="w-full space-y-1">
                <p class="text-md font-regular text-gray-800">First Name</p>
                <input type="text" placeholder="Enter your first name" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
            </div>
            <div class="w-full space-y-1">
                <p class="text-md font-regular text-gray-800">Last Name</p>
                <input type="text" placeholder="Enter your last name" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
            </div>
        </div>
  <!-- #region 
-->     <div class="w-full space-y-1">
            <p class="text-md font-regular text-gray-800">Email</p>
            <input type="email" placeholder="Enter your email" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
        </div>

        <div class="w-full space-y-1">
            <p class="text-md font-regular text-gray-800">Message</p>
            <textarea placeholder="Type your message here" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2 h-32"></textarea>
        </div>
        <x-button href="#" text="Send Message" class="w-full mt-4" />
      </form>
    </div>

</section>


<x-footer/>