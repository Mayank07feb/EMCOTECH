@extends('components.main')
@section('content')

    <!-- SERVICES Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Our Services</h2>
                <ul class="flex gap-2 justify-center">
                    <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li> <a href="{{ route('services') }}" class="hover:underline">/Services</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- SERVICES -->
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
                {{-- <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service2-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Power Quality Ananlytics</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts you
                        need
                        quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div> --}}
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
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service4-min.jpg') }}" alt="" class=""></div>
                    <i class="fas fa-check-circle text-4xl text-orange-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Quality & Precision</h3>
                    <p class="text-gray-700">We prioritize quality and accuracy in every spare part we manufacture. Strict
                        dimensional control ensures perfect fit.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES-2 -->
    <section class="services bg-gray-100 py-2">
        <div class="container mx-auto px-4 md:px-8 lg:px-20">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- card1 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div>
                        <img src="{{ asset('asset\images\tinywow_service1-min_62151750.png') }}" alt="" class="object-cover">
                    </div>
                    <i class="fas fa-cog text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Wide Range of Spare Parts</h3>
                    <p class="text-gray-700">We offer an extensive collection of spare parts for various machinery used in
                        PP Woven Sack production.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card2 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset\images\tinywow_service2-min_62151914.png') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Global Delivery</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts you
                        need quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card3 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service3-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Global Delivery</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts you
                        need quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card4 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service4-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-check-circle text-4xl text-orange-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Quality & Precision</h3>
                    <p class="text-gray-700">We prioritize quality and accuracy in every spare part we manufacture. Strict
                        dimensional control ensures perfect fit.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>

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
