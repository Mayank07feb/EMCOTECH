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
                        <img src="{{ asset('asset\images\service2 (1).png') }}" alt="" class="object-cover">
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
                        <img src="{{ asset('asset\images\service2 (2).png') }}" alt="" class="object-cover">
                    </div>
                    <i class="fas fa-cog text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Wide Range of Spare Parts</h3>
                    <p class="text-gray-700">We offer an extensive collection of spare parts for various machinery used in
                        PP Woven Sack production.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card2 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset\images\service2 (1).png') }}" alt="" class="object-cover"></div>
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

    @include('front_pages.info-form')
@endsection
