@extends('components.main')
@section('content')
    <!-- About Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">About Us</h2>
                <ul class="flex gap-2 justify-center">
                    <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li> <a href="{{ route('about') }}" class="hover:underline">/About</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ABOUT US -->
    <section class="about-us container mx-auto px-4 py-8 md:px-8 lg:px-20 lg:mt-8">
        <h1 class="text-center font-bold text-2xl mb-6 text-red-500">About us</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="img">
                <img src="{{ asset('asset/images/1711950959822.jpeg') }}" alt=".." class="">
            </div>
            <div class="text">

                <p class="text-justify leading-relaxed">
                    PERFECT, established in 1996, is a leading organization specializing in the manufacturing of
                    exclusive spare parts for a wide range of machinery used in the production of PP Woven Sacks.
                    Initially focusing on Heddle belts and Grommet bands, we have steadily expanded our expertise to
                    cater to the growing needs of our valued customers. Today, we proudly manufacture over 2,500
                    different spare parts in various sizes and dimensions, potentially the first company in the industry
                    to offer such a comprehensive selection under one roof.
                </p>
                <p class="text-justify leading-relaxed">
                    For international exports, we have established a robust marketing network. We collaborate with
                    dedicated distributors in Pakistan, Iran, Turkey, Egypt, Indonesia, Thailand, Vietnam, and Brazil.
                    Additionally, we have established a network of agents and sales representatives in select
                    territories, ensuring comprehensive market coverage. Our success in exporting our products hinges on
                    the unwavering trust we have built with our overseas customers.
                </p>
            </div>
        </div>
    </section>


    <!--what we do? -->
    <section class="about-us bg-gray-100 py-6">
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
                    Grommet Bands. Through extensive research and experience, we've developed a unique, high-performance
                    manufacturing process. This process ensures the selection of the best raw materials, meticulous
                    procedures, and well-designed molds to deliver exceptional performance at an economical price.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Recognizing the increasing demand for cast polyurethane spares, we've established a dedicated unit
                    with the latest Cast PU Dispensing Machines from M/s. Baule, France. We source customized PU raw
                    materials from M/s. Chemtura, USA. Additionally, we possess 20 CNC Turning Centers from M/s.
                    Yamazaki Mazaki, Japan, ensuring precision within 10 microns. Furthermore, we have 3 Vertical
                    Milling Centers (FANUC - JAPAN, EXCEL - SINGAPORE) with automatic pallet changers and a HURCO (USA)
                    with a fourth-axis rotary indexing table for high-precision steel and nylon Winder Cam
                    manufacturing.
                </p>
            </div>
        </div>
    </section>
@endsection
