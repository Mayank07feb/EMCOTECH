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

     <!-- Product Section -->
     <h1 class="text-center text-3xl font-bold mt-8 text-red-500"> Our Products</h1>
     <main class="container mx-auto py-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Product Post 0 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div class="mb-4">
                  <img src="{{ asset('asset/images/product.jpg') }}" alt="Tape Plant Spare Parts" class="w-full h-48 object-cover rounded-md">
              </div>
              <h3 class="text-2xl font-semibold mb-2 text-gray-800">Tape Plant Spare Parts</h3>
              <p class="text-gray-600 mb-4">Ensure your tape plant operates smoothly with high-quality spare parts. Our inventory includes essential components to keep your machinery running efficiently and minimize downtime.</p>
              <a href="{{ route('products') }}" class="text-red-600 hover:text-red-800 font-medium">View all Products</a>
          </div>
  
          <!-- Product Post 1 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div class="mb-4">
                  <img src="{{ asset('asset/images/category1.jpeg') }}" alt="Optimizing Inventory Control" class="w-full h-48 object-cover rounded-md">
              </div>
              <h3 class="text-2xl font-semibold mb-2 text-gray-800">Optimizing Inventory Control</h3>
              <p class="text-gray-600 mb-4">Effective inventory control strategies can reduce costs and ensure that parts are available when needed...</p>
              <a href="{{ route('products') }}" class="text-red-600 hover:text-red-800 font-medium">View all Products</a>
          </div>
  
          <!-- Product Post 2 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div class="mb-4">
                  <img src="{{ asset('asset/images/category2.jpeg') }}" alt="Best Practices for Supplier Management" class="w-full h-48 object-cover rounded-md">
              </div>
              <h3 class="text-2xl font-semibold mb-2 text-gray-800">Best Practices for Supplier Management</h3>
              <p class="text-gray-600 mb-4">Building strong relationships with suppliers can lead to better pricing and faster delivery times...</p>
              <a href="{{ route('products') }}" class="text-red-600 hover:text-red-800 font-medium">View all Products</a>
          </div>
  
          <!-- Product Post 3 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div class="mb-4">
                  <img src="{{ asset('asset/images/category3.jpeg') }}" alt="Maximizing Equipment Lifespan" class="w-full h-48 object-cover rounded-md">
              </div>
              <h3 class="text-2xl font-semibold mb-2 text-gray-800">Maximizing Equipment Lifespan</h3>
              <p class="text-gray-600 mb-4">Learn how regular maintenance and quality spare parts can extend the life of your equipment...</p>
              <a href="{{ route('products') }}" class="text-red-600 hover:text-red-800 font-medium">View all Products</a>
          </div>
  
          <!-- Product Post 4 -->
          <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
              <div class="mb-4">
                  <img src="{{ asset('asset/images/category4.jpeg') }}" alt="The Future of Spare Parts Management" class="w-full h-48 object-cover rounded-md">
              </div>
              <h3 class="text-2xl font-semibold mb-2 text-gray-800">The Future of Spare Parts Management</h3>
              <p class="text-gray-600 mb-4">Explore emerging trends and technologies that are shaping the future of spare parts management...</p>
              <a href="{{ route('products') }}" class="text-red-600 hover:text-red-800 font-medium">View all Products</a>
          </div>
      </div>
  </main>
  
    <!-- SEERVICES -->
    <section class="services bg-gray-100 py-16">
        <div class="container mx-auto px-4 md:px-8 lg:px-20">
            <h1 class="text-center text-3xl font-bold mb-8 text-red-500">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
                <!-- card1 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div>
                        <img src="{{ asset('asset\images\service2 (1).png') }}" alt="" class="object-cover">
                    </div>
                    <i class="fas fa-cog text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">MEP Consultancy services 
                    </h3>
                    <p class="text-gray-700">We offer an extensive collection of spare parts for various machinery used in
                        PP
                        Woven Sack production.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card2 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset\images\service2 (2).png') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Power Quality Analysis</h3>
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
    {{-- <section class="py-12 bg-gray-100">
      <div class="container mx-auto">
          <h2 class="text-3xl font-bold mb-8 text-center text-red-500">Our Team</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
              
              <!-- Team Member 1 -->
              <div class="team-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  <div class="team-photo mb-6 flex justify-center">
                      <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                          <i class="ri-user-fill text-3xl text-white"></i>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold mb-2 text-center">Er. Nishant Singh</h3>
                  <p class="text-gray-700 mb-2 text-center">Chartered Engineer</p>
                  <p class="text-gray-700 mb-2 text-center">B.Tech Electrical</p>
                  <p class="text-gray-700 mb-2 text-center">BEE certified Energy Manager</p>
                  <p class="text-gray-600 text-center mb-4">Member of Institutions of Engineers India</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline block text-center">Read More</a>
              </div>
  
              <!-- Team Member 2 -->
              <div class="team-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  <div class="team-photo mb-6 flex justify-center">
                      <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                          <i class="ri-user-fill text-3xl text-white"></i>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold mb-2 text-center">Anu Singh</h3>
                  <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                  <p class="text-gray-600 text-center mb-4">Anu is proficient in sourcing and managing a wide range of spare parts for the woven sack industry.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline block text-center">Read More</a>
              </div>
  
              <!-- Team Member 3 -->
              <div class="team-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  <div class="team-photo mb-6 flex justify-center">
                      <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                          <i class="ri-user-fill text-3xl text-white"></i>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold mb-2 text-center">Singa Patel</h3>
                  <p class="text-gray-700 mb-2 text-center">Spare Parts Specialist</p>
                  <p class="text-gray-600 text-center mb-4">Singa is proficient in sourcing and managing a wide range of spare parts for the woven sack industry.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline block text-center">Read More</a>
              </div>
  
              <!-- Team Member 4 -->
              <div class="team-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  <div class="team-photo mb-6 flex justify-center">
                      <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                          <i class="ri-user-fill text-3xl text-white"></i>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold mb-2 text-center">M S Siddiqui</h3>
                  <p class="text-gray-700 mb-2 text-center">Electrical and Mechanical Utility Equipment Specialist</p>
                  <p class="text-gray-600 text-center mb-4">Siddiqui is proficient in sourcing and managing a wide range of utility equipment.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline block text-center">Read More</a>
              </div>
  
              <!-- Team Member 5 -->
              <div class="team-card bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  <div class="team-photo mb-6 flex justify-center">
                      <div class="rounded-full bg-slate-400 flex justify-center items-center w-24 h-24">
                          <i class="ri-user-fill text-3xl text-white"></i>
                      </div>
                  </div>
                  <h3 class="text-xl font-bold mb-2 text-center">Aditya Goyal</h3>
                  <p class="text-gray-700 mb-2 text-center">Accountant</p>
                  <p class="text-gray-600 text-center mb-4">Aditya manages financial operations with precision and integrity.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline block text-center">Read More</a>
              </div>
  
          </div>
      </div>
  </section>
   --}}
   {{-- team slider --}}
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



    <!-- Vision and Mission Section -->
    <section class="vision-mission py-16 bg-gray-100">
      <div class="container mx-auto px-4">
          <h2 class="text-3xl md:text-4xl font-bold text-red-600 text-center mb-12">
              Vision Statement of Emcotech Machinery and Solutions
          </h2>
          <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-4">
              <div class="lg:w-1/2">
                  <p class="text-lg text-gray-700  leading-loose mb-8">
                      To pioneer innovation and excellence in the realm of woven sack spare parts, electrical and mechanical utility equipment, and MEP consultancy services. By setting unparalleled standards in quality and reliability, we aspire to empower industries with cutting-edge solutions that drive efficiency, sustainability, and growth, fostering a future where technology and engineering intersect to create impactful progress for our clients worldwide.
                  </p>
              </div>
              <div class="lg:w-1/2 flex justify-center lg:justify-end">
                  <img src="{{ asset('asset/images/main.avif') }}" 
                       alt="Emcotech Machinery and Solutions Vision" 
                       class="rounded-lg shadow-xl w-full max-w-md h-auto object-cover"
                       loading="lazy">
              </div>
          </div>
      </div>
  </section>
  
    <!-- Mission -->
    <section class="vision-mission py-16 bg-gray-100">
      <div class="max-w-6xl mx-auto px-4">
          <h2 class="text-4xl font-bold text-red-600 text-center mb-12">Our Mission</h2>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
              <div class="flex justify-center lg:justify-end">
                  <img src="{{ asset('asset/images/main.avif') }}" alt="Company Mission" class="rounded-lg shadow-lg h-[650px] mt-24 w-full object-cover">
              </div>
              <div class="flex flex-col justify-center">
                  <p class="text-lg text-gray-700 mb-2">
                      At Emcotech Machinery and Solutions, our mission is to empower woven sack industries worldwide by delivering innovative, high-quality, and reliable solutions in woven sack machinery spare parts, along with comprehensive services in Electrical and Mechanical Utility Equipment and MEP consultancy. We aim to set new standards in excellence, drive efficiency and sustainability, and foster impactful progress through the intersection of technology and engineering.
                  </p>
                  <ul class="text-lg text-gray-700 space-y-1 mb-2">
                      <li><strong>Innovation:</strong> We pioneer new ideas and technologies to stay ahead of the curve.</li>
                      <li><strong>Excellence:</strong> We strive for perfection in everything we do, exceeding expectations and setting new standards.</li>
                      <li><strong>Sustainability:</strong> We prioritize eco-friendly practices and solutions that minimize our environmental footprint.</li>
                      <li><strong>Customer-centricity:</strong> We put our clients at the heart of everything we do, delivering tailored solutions that drive their success.</li>
                      <li><strong>Collaboration:</strong> We work together as a team, fostering a culture of open communication, mutual respect, and collective growth.</li>
                  </ul>
                  <p class="text-lg text-gray-700 mb-2">
                      We aim to:
                  </p>
                  <ul class="text-lg text-gray-700 space-y-1">
                      <li>Deliver cutting-edge solutions that drive industrial efficiency, productivity, and growth.</li>
                      <li>Build long-term relationships with our clients, founded on trust, expertise, and exceptional service.</li>
                      <li>Attract, develop, and retain top talent, empowering our team members to reach their full potential.</li>
                      <li>Foster a culture of innovation, creativity, and continuous improvement, staying ahead of industry trends and challenges.</li>
                      <li>Save energy and provide quality power to each machine.</li>
                  </ul>
              </div>
          </div>
      </div>
  </section>
  
  
        </div>
    </section>
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
@include('front_pages.info-form')
   
@endsection