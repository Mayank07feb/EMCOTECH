@extends('components.main')
@section('content')
    <!-- Contact Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold">Contact Us</h2>

                <ul class="flex gap-2 justify-center">
                    <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li> <a href="{{ route('contact') }}" class="hover:underline">/Contact us</a></li>
                </ul>
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
    <!-- map -->
    <div class="w-full">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6814.7222848077745!2d75.474458!3d31.349012000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a4fb0a4e9031d%3A0x9ea33f755767bc86!2sperfect%20belts%20ltd.!5e0!3m2!1sen!2sin!4v1718965039432!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-full"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
