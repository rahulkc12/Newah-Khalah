@vite('resources/css/app.css')


<x-navbar />
<x-banner :title="'Donate - Newah Khalah'" :text="'Preserve Culture. Empower Community. Give with Heart.'"/>
<div class="mx-4 sm:mx-[20px] md:mx-[40px] lg:mx-[120px] my-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    <div class="flex flex-col gap-4">
<img src="img/donate.png" alt="Donate" class="w-full h-auto rounded-md object-cover">
        <div>
        <h2 class="text-2xl text-red-800 font-semibold my-2">Why Your Donation Matters</h2>
        <p class="text-gray-700 mb-2">Your contribution helps us bring the warmth, beauty, and depth of Newar culture to life right here in the USA.</p>
        <p class="text-gray-700 mb-2">Every donation you make supports our festivals, youth programs, language preservation, cultural rites, and community outreach.</p>
            <p class="text-gray-700 mb-2">
        Whether it’s $10 or $1,000, every rupee’s worth of love counts.</p>
        </div>
        <div>
        <h2 class="text-2xl text-red-800 font-semibold my-2">Questions?</h2>
        <p class="text-gray-700 mb-2">Need help or want to discuss a large gift or sponsorship?</p>
        <div class="flex flex-col gap-2">
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


<div class="w-full max-w-xl mx-auto bg-white border border-gray-200 p-4 sm:p-8 rounded-md shadow-md space-y-6 font-sans">
  <h2 class="text-2xl font-semibold text-center">Donate</h2>

  <!-- Frequency Tabs -->
  <div class="flex justify-between bg-neutral-200 rounded-full overflow-hidden">
    <button class="flex-1 py-2 text-white bg-red-800 font-medium rounded-full">One-time</button>
    <button class="flex-1 py-2 text-neutral-800">Monthly</button>
    <button class="flex-1 py-2 text-neutral-800">Yearly</button>
  </div>

  <!-- Amount Options -->
  <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
    <button class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2 hover:text-primary-500 hover:border-red-800">$25</button>
    <button class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2 hover:text-primary-500 hover:border-red-800">$50</button>
    <button class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2 hover:text-primary-500 hover:border-red-800">$75</button>
    <button class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2 hover:text-primary-500 hover:border-red-800">$100</button>
  </div>

  <!-- Currency + Other Amount -->
  <div class="flex flex-col sm:flex-row ">
    <select class="sm:w-1/6 w-full border text-lg border-gray-400 text-gray-500 rounded-l-lg border-r-lg px-3 py-2 bg-white">
      <option>USD</option>
      <option>EUR</option>
      <option>NPR</option>
    </select>
    <input type="text" placeholder="$ Other" class="sm:w-5/6 w-full border text-lg text-gray-500 rounded-r-lg border-gray-400 px-3 py-2" />
  </div>

  <!-- Honor Checkbox -->
  <div class="flex items-center space-x-2">
    <input type="checkbox" id="honor" class="rounded border-gray-400">
    <label for="honor" class="text-sm text-gray-700">Dedicate my donation in honor or in memory of someone</label>
  </div>

  <!-- Info Section -->
  <h3 class="text-lg font-semibold text-center pt-2">Your Information</h3>

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

  <div class="flex items-center space-x-2">
    <input type="checkbox" id="anonymous" class="rounded border-gray-400">
    <label for="anonymous" class="text-sm text-gray-700">Make Donation anonymous</label>
  </div>
  <!-- #region 
--><div class="w-full space-y-1">
            <p class="text-md font-regular text-gray-800">Email</p>
            <input type="email" placeholder="Enter your email" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
        </div>

  <!-- Phone with Flag -->
  <div class="flex flex-col space-y-1">
    <p class="text-md font-regular text-gray-800">Phone</p>
    <div class="flex">
      <select class="w-2/6 border text-lg border-gray-400 text-gray-500 rounded-l-lg border-r-lg px-3 py-2 bg-white">
        <option value="+1">🇺🇸 +1</option>
        <option value="+91">🇮🇳 +91</option>
        <option value="+977">🇳🇵 +977</option>
      </select>
    
    <input type="tel" placeholder="(444) 1234-5678" class="w-4/6 border text-lg text-gray-500 rounded-r-lg border-gray-400 px-3 py-2" />
  </div>
  </div>

  <div class="flex flex-col space-y-1">
    <p class="text-md font-regular text-gray-800">Country</p>
    <select class="w-full border text-lg border-gray-400 text-gray-500 rounded-lg border-lg px-3 py-2 bg-white">
      <option value="+1">USA</option>
      <option value="+91">India</option>
      <option value="+977">Nepal</option>
    </select>
  </div>

  <div class="w-full space-y-1">
                <p class="text-md font-regular text-gray-800">Address 1</p>
                <input type="text" placeholder="Address" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
    </div>
    <div class="w-full space-y-1">
                <p class="text-md font-regular text-gray-800">Address 2</p>
                <input type="text" placeholder="Address" class="w-full text-lg text-gray-500 border border-gray-400 rounded-lg px-4 py-2">
    </div>


  <div class="flex items-start space-x-2">
    <input type="checkbox" id="subscribe" class="mt-1 rounded border-gray-400">
    <label for="subscribe" class="text-sm text-gray-700">
      Yes — I would like to receive updates and opportunities. I understand that the Foundation respects
      <a href="#" class="underline text-blue-600">my privacy</a> and that I can unsubscribe at any time.
    </label>
  </div>

  <!-- Donate Button -->
  <x-button href="/payment" text="Donate Now" class="w-full " />
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Frequency buttons
  const freqButtons = document.querySelectorAll('.bg-neutral-200 > button');
  freqButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      freqButtons.forEach(b => {
        b.classList.remove('bg-red-800', 'text-white','font-medium');
        b.classList.add('text-neutral-800','font-regular');
      });
      btn.classList.add('bg-red-800', 'text-white','rounded-full','font-medium');
      btn.classList.remove('text-neutral-800','font-regular');
    });
  });

  // Amount buttons
  const amountButtons = document.querySelectorAll('.grid-cols-2 button, .grid-cols-4 button');
  const otherInput = document.querySelector('input[placeholder="$ Other"]');
  amountButtons.forEach(btn => {
    btn.addEventListener('click', function () {
      amountButtons.forEach(b => {
        b.classList.remove('bg-red-100', 'text-red-800', 'border-red-800');
        b.classList.add('text-gray-500', 'border-gray-400');
      });
      btn.classList.add('bg-red-100', 'text-red-800', 'border-red-800');
      btn.classList.remove('text-gray-500', 'border-gray-400');
      if (otherInput) {
        otherInput.classList.remove('bg-red-100', 'text-red-800', 'border-red-800');
        otherInput.classList.add('text-gray-500', 'border-gray-400');
      }
    });
  });
  if (otherInput) {
    otherInput.addEventListener('focus', function () {
      amountButtons.forEach(b => {
        b.classList.remove('bg-red-100', 'text-red-800', 'border-red-800');
        b.classList.add('text-gray-500', 'border-gray-400');
      });
      otherInput.classList.add('bg-red-100', 'text-red-800', 'border-red-800');
      otherInput.classList.remove('text-gray-500', 'border-gray-400');
    });
  }
});
</script>

</div>
<x-footer />
