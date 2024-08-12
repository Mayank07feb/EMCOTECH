@extends('components.main')
@section('content')
    <!-- container img -->
    <div>
        <img src="{{ asset('asset/images/front.jpg') }}" alt="" class="object-cover object-center w-screen h-full">
    </div>
    <!-- imgs container -->
    <div>
        <h1 class="text-center font-bold text-2xl mb-6 text-red-500 mt-4">CERTIFICATE</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mx-4">
            <div class="cer flex flex-col items-center text-center shadow-2xl p-4 py-8">
                <img src="{{ asset('asset/images/div1.jpeg') }}" alt="Accredited Star Export House"
                    class="rounded-full h-32 w-32 border-4 border-blue-500 mb-4 shadow">
                <p class="text-semibold">Accredited Star Export House status by GOVT. of India</p>
            </div>
            <div class="cer flex flex-col items-center text-center shadow-2xl p-4  py-8">
                <img src="{{ asset('asset/images/div2.jpeg') }}" alt="Assigned SE 2B Rating by CRISIL"
                    class="rounded-full h-32 w-32 border-4 border-blue-500 mb-4">
                <p class="text-semibold">Assigned SE 2B Rating by CRISIL</p>
            </div>
            <div class="cer flex flex-col items-center text-center shadow-2xl p-4  py-8">
                <img src="{{ asset('asset/images/div3.png') }}" alt="ISO 9001:2015 Certified"
                    class="rounded-full h-32 w-32 border-4 border-blue-500 mb-4">
                <p class="text-semibold">ISO 9001:2015 Certified by Quality Research Organisation</p>
            </div>
        </div>
    </div>
{{-- About us --}}
    <section class="about-us container mx-auto px-4 py-8 md:px-8 lg:px-20 lg:mt-8">
        <h1 class="text-center font-bold text-2xl mb-6 text-red-500">About us</h1>
        <div class="grid grid-cols-1">
            {{-- <div class="img">
                <img src="{{ asset('asset/images/1711950959822.jpeg') }}" alt=".." class="h-full w-full">
            </div> --}}
            <div class="text">

                <p class="flex justify-center leading-relaxed">
                    "EMCOTECH MACHINERY AND SOLUTIONS" an organization to provide high quality Spare Parts and consumables for Woven Sacks Machinery- Tapelines, Winders, Lamination, Printing, Circular Looms, BCS, Valvomatic, Sewing and Block Bottom Valve Machine used in the manufacturing of PP woven sacks of different make like Starlinger, Windmoller & Holscher, Lohia, Remak, Pelican etc.

                    In India, we are supplying our spare parts to most of the woven sack manufacturing units and also provide consultation for new manufacturing unit and expansion of unit.

                    We also provide MEP Consulting Services, Power Quality Analysis and quality execution of electrical, compressed air and water line for woven sack industry.

                </p>
                <p class="flex justify-center leading-relaxed">
                    
                    For exports, we have different arrangements for marketing our products. Now we are active in Tanzania, DR Congo, Kenya, Nigeria, Uganda, Ethiopia etc.

                    This was made possible by assuring our overseas customers that we are capable of providing highest possible quality & performance, coupled with strict dimensional accuracy at reasonable & affordable prices as well as procuring any special parts and other consumables for their consumption.
                    potentially the first company in the industry to offer such a comprehensive selection under one roof.
                </p>
            </div>
        </div>
    </section>
    <!-- SEERVICES -->
    <section class="services bg-gray-100 py-16">
        <div class="container mx-auto px-4 md:px-8 lg:px-20">
            <h1 class="text-center text-3xl font-bold mb-8 text-red-500">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- card1 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div>
                        <img src="{{ asset('asset\images\tinywow_service1-min_62151750.png') }}" alt="" class="object-cover">
                    </div>
                    <i class="fas fa-cog text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">MEP Consulting</h3>
                    <p class="text-gray-700">We offer an extensive collection of spare parts for various machinery used in
                        PP
                        Woven Sack production.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card2 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset\images\tinywow_service2-min_62151914.png') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Power Quality Ananlytics</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts you
                        need
                        quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card3 -->
                {{-- <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service3-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Electrical</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts
                        you need
                        quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div> --}}
                <!-- card4 -->
                {{-- <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service4-min.jpg') }}" alt="" class=""></div>
                    <i class="fas fa-check-circle text-4xl text-orange-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Quality & Precision</h3>
                    <p class="text-gray-700">We prioritize quality and accuracy in every spare part we manufacture. Strict
                        dimensional control ensures perfect fit.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <h1 class="text-center text-3xl font-bold mt-8 text-red-500"> Our Products</h1>
    <main class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product Post 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category1.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Optimizing Inventory Control</h3>
                <p class="text-gray-700 mb-4">Effective inventory control strategies can reduce costs and ensure that parts are available when needed...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">View all Products</a>
            </div>
    
            <!-- Product Post 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category2.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Best Practices for Supplier Management</h3>
                <p class="text-gray-700 mb-4">Building strong relationships with suppliers can lead to better pricing and faster delivery times...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">View all Products</a>
            </div>
    
            <!-- Product Post 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category3.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Maximizing Equipment Lifespan</h3>
                <p class="text-gray-700 mb-4">Learn how regular maintenance and quality spare parts can extend the life of your equipment...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">View all Products</a>
            </div>
    
            <!-- Product Post 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category4.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">The Future of Spare Parts Management</h3>
                <p class="text-gray-700 mb-4">Explore emerging trends and technologies that are shaping the future of spare parts management...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">View all Products</a>
            </div>
        </div>
    </main>
    
    <!--what we do? -->
    {{-- <section class="about-us bg-gray-100 py-6">
        <h2 class="text-3xl font-bold mb-6 text-center text-red-500">What we do?</h2>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8 items-center">
            <div class="image order-2 md:order-1">
                <img src="{{ asset('asset/images/about2.png') }}" alt="About PERFECT Spare Parts"
                    class="object-cover  shadow-md w-full h-full">
            </div>
            <div class="content order-1 md:order-2 px-2 md:px-8">
                <h2 class="text-2xl font-bold mb-4">Commitment to Quality & Innovation</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    PERFECT is dedicated to continuous improvement in the quality of our manufactured spare parts and
                    Grommet
                    Bands. Through extensive research and experience, we've developed a unique, high-performance
                    manufacturing
                    process. This process ensures the selection of the best raw materials, meticulous procedures, and
                    well-designed molds to deliver exceptional performance at an economical price.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Recognizing the increasing demand for cast polyurethane spares, we've established a dedicated unit with
                    the
                    latest Cast PU Dispensing Machines from M/s. Baule, France. We source customized PU raw materials from
                    M/s.
                    Chemtura, USA. Additionally, we possess 20 CNC Turning Centers from M/s. Yamazaki Mazaki, Japan,
                    ensuring
                    precision within 10 microns. Furthermore, we have 3 Vertical Milling Centers (FANUC - JAPAN, EXCEL -
                    SINGAPORE) with automatic pallet changers and a HURCO (USA) with a fourth-axis rotary indexing table for
                    high-precision steel and nylon Winder Cam manufacturing.
                </p>
            </div>
        </div>
    </section> --}}

    <!-- Our Team Section -->
    <section class=" py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center text-red-500">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Team Member 1 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    {{-- <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team1-min.jpg') }}" alt="Photo of John Doe"
                            class="w-full rounded-md">
                    </div> --}}
                    <div class="rounded-full bg-slate-400 flex justify-center mx-40 py-2"> <i class="ri-user-fill text-3xl"></i></div>
                    <h3 class="text-xl font-bold mb-2 text-center">John Doe</h3>
                    <p class="text-gray-700 mb-2 text-center">Lead Technician</p>
                    <p class="text-gray-600 text-center">John has over 10 years of experience in machinery maintenance and spare parts
                        management.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline flex justify-center">Read More</a>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    {{-- <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team2-min.jpg') }}" alt="Photo of Jane Smith"
                            class="w-full rounded-md">
                    </div> --}}
                    <div class="rounded-full bg-slate-400 flex justify-center mx-40 py-2"> <i class="ri-user-fill text-3xl"></i></div>
                    <h3 class="text-xl font-bold mb-2 text-center">Jane Smith</h3>
                    <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                    <p class="text-gray-600 text-center">Jane is an expert in sourcing and managing a wide range of spare parts for PP
                        Woven
                        Sack production.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline flex justify-center">Read More</a>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    {{-- <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team3-min.jpg') }}" alt="Photo of Mosh Jith"
                            class="w-full rounded-md">
                    </div> --}}
                    <div class="rounded-full bg-slate-400 flex justify-center mx-40 py-2"> <i class="ri-user-fill text-3xl"></i></div>
                    <h3 class="text-xl font-bold mb-2 text-center">Mosh Jith</h3>
                    <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                    <p class="text-gray-600 text-center">Mosh is proficient in sourcing and managing a wide range of spare parts for PP
                        Woven
                        Sack production.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline flex justify-center">Read More</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="vision-mission py-6 bg-gray-200">
        <h2 class="text-4xl font-bold text-red-500 text-center mb-8">Our Vision</h2>
        <div class="max-w-3xl mx-auto text-center grid grid-cols-1 lg:grid-cols-2 gap-8">
            <p class="text-lg text-gray-700 mt-12">
                To be the leading provider of high-quality spare parts globally, exceeding customer expectations through
                innovation, integrity, and reliability.
            </p>
            <div>
                <img src="{{ asset('asset/images/main.avif') }}" alt=".." class="rounded-lg">
            </div>
        </div>
    </section>
    <!-- Mission -->
    <section class="vision-mission py-6 mb-6 bg-gray-200">
        <h2 class="text-4xl font-bold text-red-500 text-center mb-8">Our Mision</h2>
        <div class="max-w-3xl mx-auto text-center grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <img src="{{ asset('asset/images/main.avif') }}" alt=".." class="rounded-lg">
            </div>
            <p class="text-lg text-gray-700 mt-12">
                To be the leading provider of high-quality spare parts globally, exceeding customer expectations through
                innovation, integrity, and reliability.
            </p>

        </div>
    </section>
    <!-- faq -->
    <main class="p-5 bg-gray-400">
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
    </main>

    <!-- contact -->
    <div class="relative order bg-gray-200">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 max-w-screen-xl mt-8 mx-auto overflow-auto">
            <!-- Contact Information -->
            <div class="mx-8 p-4 shadow-2xl rounded-lg">

                <h3 class="text-2xl font-bold text-red-500 mb-4">Get In Touch</h3>
                <p class="text-black mb-4">Feel free to reach out to us for any inquiries or assistance. We are here to
                    help you
                    with your spare parts needs.</p>
                    <ul class="space-y-2">
                        <li class="flex items-center space-x-2">
                            
                            <i class="ri-map-pin-2-line"></i>
                            <span>
                                 Registered office: 53, Rahul Bihar Dayal Bagh, Agra 282005
                                <br> Branch office: J1/20 Awos Vikos No 1 Keshavpuram Kalyanpur kanpur 208017</span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="ri-phone-fill"></i>
                            <span>Phone No.: +91-9927505015
                            </span>
                        </li>
                        <li class="flex items-center space-x-2">
                            <i class="ri-mail-open-fill"></i>
                            <span>Email: sales@emcotechms.co.in
        
                                Info@emcotechms.co.in 
                            </span>
                        </li>
                       {{-- <a href="www.emcotechms.co.in"> <li>
                        <i class="ri-earth-line"></i>
                        <span>Website: www.emcotech
                        </span>
                    </li></a> --}}
                    </ul>
                <h3 class="text-2xl font-bold text-red-500 mb-4">Follow Us</h3>
                <ul class="flex space-x-4 text-gray-700">
                    <li><a href="#" class="hover:text-blue-500"><i class="ri-twitter-fill text-black"></i></a></li>
                    <li><a href="#" class="hover:text-blue-700"><i class="ri-facebook-fill text-black"></i></a>
                    </li>
                    <li><a href="#" class="hover:text-blue-900"><i class="ri-linkedin-fill text-black "></i></a>
                    </li>
                    <li><a href="#" class="hover:text-pink-500"><i class="ri-instagram-fill text-black"></i></a>
                    </li>
                    <li><a href="#" class="hover:text-red-500"><i class="ri-youtube-fill text-black"></i></a></li>
                </ul>
            </div>
            <!-- Order Form -->
            <main class="container mx-auto py-4">
                <form action="#" method="POST" class="bg-transparent rounded-lg shadow-md p-4">
                    <h2 class="text-4xl font-bold text-red-500 mb-4">Contact us</h2>
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-black mb-2">Information</h3>
                        <div class="flex flex-col space-y-4">
                            <input type="text" id="name" name="name" placeholder="Enter your name" required
                                class="w-full bg-transparent font-bold text-white px-4 py-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <input type="email" id="email" name="email" placeholder="Enter your email" required
                                class="w-full bg-transparent font-bold text-white px-4 py-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <input type="tel" id="phone" name="phone" placeholder="Enter phone number"
                                required
                                class="w-full bg-transparent font-bold text-white px-4 py-2 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                            <textarea id="address" name="address" placeholder="Enter your address" required
                                class="w-full bg-transparent font-bold text-white px-4 py-2 border border-gray-600 rounded-lg resize-none focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500">Send</button>
                </form>
            </main>
        </div>

    </div>
@endsection