@extends('components.main')
@section('content')
<!-- Team Section -->
<section class="relative bg-black text-white py-12">
    <div class="absolute inset-0 opacity-45">
        <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto relative z-10">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Our Team</h2>

            <ul class="flex gap-2 justify-center">
                <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li> <a href="{{ route('team') }}" class="hover:underline">/Team</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- OUR EXEPERT TEAM -->
<section class="py-12">
  <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8 text-center text-red-500">Our Team</h2>
      
      <div class="relative">
          <div id="slider" class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide">
              <!-- Team Member 1 -->
              <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-start p-4">
                  <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                      <div class="mb-6 flex justify-center">
                          <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                              <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                              </svg>
                          </div>
                      </div>
                      <h3 class="text-xl font-bold mb-2 text-center">Er. Nishant Singh</h3>
                      <p class="text-gray-700 mb-2 text-center">Chartered Engineer</p>
                      <p class="text-gray-700 mb-2 text-center">B.Tech Electrical</p>
                      <p class="text-gray-700 mb-2 text-center">BEE certified Energy Manager</p>
                      <p class="text-gray-600 text-center mb-4">Member of Institutions of Engineers India</p>
                      <a href="#" class="text-red-500 hover:underline block text-center">Read More</a>
                  </div>
              </div>

              <!-- Team Member 2 -->
              <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-start p-4">
                  <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                      <div class="mb-6 flex justify-center">
                          <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                              <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                              </svg>
                          </div>
                      </div>
                      <h3 class="text-xl font-bold mb-2 text-center">Anu Singh</h3>
                      <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                      <p class="text-gray-600 text-center mb-4">Anu is proficient in sourcing and managing a wide range of spare parts for the woven sack industry.</p>
                      <a href="#" class="text-red-500 hover:underline block text-center">Read More</a>
                  </div>
              </div>
              
              <!-- Team Member 3 -->
              <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-start p-4">
                  <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                      <div class="mb-6 flex justify-center">
                          <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                              <i class="ri-user-fill text-3xl text-white"></i>
                          </div>
                      </div>
                      <h3 class="text-xl font-bold mb-2 text-center">Singa Patel</h3>
                      <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                      <p class="text-gray-600 text-center mb-4">Singa is proficient in sourcing and managing a wide range of spare parts for the woven sack industry.</p>
                      <a href="#" class="text-red-500 hover:underline block text-center">Read More</a>
                  </div>
              </div>

              <!-- Team Member 4 -->
              <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-start p-4">
                  <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                      <div class="mb-6 flex justify-center">
                          <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                              <i class="ri-user-fill text-3xl text-white"></i>
                          </div>
                      </div>
                      <h3 class="text-xl font-bold mb-2 text-center">M S Siddiqui</h3>
                      <p class="text-gray-700 mb-2 text-center">Electrical and Mechanical Utility Equipment Specialist</p>
                      <p class="text-gray-600 text-center mb-4">Siddiqui is proficient in sourcing and managing a wide range of utility equipment.</p>
                      <a href="#" class="text-red-500 hover:underline block text-center">Read More</a>
                  </div>
              </div>

              <!-- Team Member 5 -->
              <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-start p-4">
                  <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                      <div class="mb-6 flex justify-center">
                          <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                              <i class="ri-user-fill text-3xl text-white"></i>
                          </div>
                      </div>
                      <h3 class="text-xl font-bold mb-2 text-center">Aditya Goyal</h3>
                      <p class="text-gray-700 mb-2 text-center">Accountant</p>
                      <p class="text-gray-600 text-center mb-4">Aditya manages financial operations with precision and integrity.</p>
                      <a href="#" class="text-red-500 hover:underline block text-center">Read More</a>
                  </div>
              </div>
              <!-- Add more team members here following the same structure -->
          </div>

          <!-- Navigation Buttons -->
          <button id="prevBtn" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 z-10">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
          </button>
          <button id="nextBtn" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:bg-gray-100 z-10">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
          </button>
      </div>
  </div>
</section>

<script>
  const slider = document.getElementById('slider');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  prevBtn.addEventListener('click', () => {
      slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
  });

  nextBtn.addEventListener('click', () => {
      slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
  });

  // Hide scrollbar across browsers
  const style = document.createElement('style');
  style.textContent = `
      .scrollbar-hide::-webkit-scrollbar {
          display: none;
      }
      .scrollbar-hide {
          -ms-overflow-style: none;
          scrollbar-width: none;
      }
  `;
  document.head.appendChild(style);
</script>

<!-- faq -->
{{-- <main class="p-5 bg-gray-400">
    <div class="flex justify-center items-start my-2">
      <div class="w-full sm:w-10/12 md:w-max-w-6xl my-1 ">
        <h2 class="text-4xl font-semibold text-vnet-blue mb-4 text-center text-red-500 ">Frequently Asked Questions</h2>
        <ul class="flex flex-col">
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(1)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>When will my order arrive?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              x-ref="tab"
              :style="handleToggle()"
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
            >
              <p class="p-3 text-gray-900">
                Shipping time is set by our delivery partners, according to the delivery method chosen by you. Additional details can be found in the order confirmation
              </p>
            </div>
          </li>
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(2)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>How do I track my order?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
              x-ref="tab"
              :style="handleToggle()"
            >
              <p class="p-3 text-gray-900">
                Once shipped, you’ll get a confirmation email that includes a tracking number and additional information regarding tracking your order.
              </p>
            </div>
          </li>
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(3)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>What’s your return policy?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
              x-ref="tab"
              :style="handleToggle()"
            >
              <p class="p-3 text-gray-900">
                We allow the return of all items within 30 days of your original order’s date. If you’re interested in returning your items, send us an email with your order number and we’ll ship a return label.
              </p>
            </div>
          </li>
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(4)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>How do I make changes to an existing order?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
              x-ref="tab"
              :style="handleToggle()"
            >
              <p class="p-3 text-gray-900">
                Changes to an existing order can be made as long as the order is still in “processing” status. Please contact our team via email and we’ll make sure to apply the needed changes. If your order has already been shipped, we cannot apply any changes to it. If you are unhappy with your order when it arrives, please contact us for any changes you may require.
              </p>
            </div>
          </li>
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(5)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>What shipping options do you have?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
              x-ref="tab"
              :style="handleToggle()"
            >
              <p class="p-3 text-gray-900">
                For USA domestic orders we offer FedEx and USPS shipping.
              </p>
            </div>
          </li>
          <li class="bg-white my-2 shadow-lg rounded-lg" x-data="accordion(6)">
            <h2
              @click="handleClick()"
              class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer"
            >
              <span>What payment methods do you accept?</span>
              <svg
                :class="handleRotate()"
                class="fill-current text-red-700 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
              >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
              </svg>
            </h2>
            <div
              class="border-l-2 border-red-600 overflow-hidden max-h-0 duration-500 transition-all"
              x-ref="tab"
              :style="handleToggle()"
            >
              <p class="p-3 text-gray-900">
                Any method of payments acceptable by you. For example: We accept MasterCard, Visa, American Express, PayPal, JCB Discover, Gift Cards, etc.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
</main> --}}
@endsection
