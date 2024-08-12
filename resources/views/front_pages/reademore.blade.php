@extends('components.main')
@section('content')
    <!-- About Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold">Read More</h2>

                <ul class="flex gap-2 justify-center">
                    <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li> <a href="{{ route('readmore') }}" class="hover:underline">/Read more</a></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- section -->
    <main class="container mx-auto py-12 px-4">
        <h1 class="text-3xl font-bold text-center text-red-500 mb-4">Spare - Your One-Stop Shop for Pre-Loved Treasures</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="overflow-auto">
                <div class="flex justify-center m-2"><img src="{{ asset('asset/images/blog5.jpg') }}" alt="Spare Website Image"
                        class="w-1/2 object-cover rounded-lg mb-4"></div>
                <p class="text-sm text-gray-700 leading-relaxed text-center p-4">
                    Spare is a platform that allows people to buy and sell gently used items.We believe in giving pre-loved
                    treasures a new life and promoting a moresustainable way of shopping. Whether you're looking for a
                    unique piece of furniture,a stylish piece of clothing, or something in between, you're sure to find it
                    on Spare.
                </p>
                <p class="text-sm text-gray-700 leading-relaxed text-center p-4">
                    Our mission is to make it easy for people to declutter their homes and find new homes for their unwanted
                    items. We also want to make it affordable for people to find unique and stylish items without breaking
                    the bank.
                </p>
                <div class="flex justify-center"><a href="#"
                        class="inline-flex mt-4 items-center px-4 py-2 rounded-md bg-green-500 text-white font-bold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Check Now
                    </a></div>
            </div>
            <div class="overflow-auto">

                <div class="flex justify-center m-2"><img src="{{ asset('asset/images/blog5.jpg') }}" alt="Spare Website Image"
                        class="w-1/2 object-cover rounded-lg mb-4"></div>
                <p class="text-sm text-gray-700 leading-relaxed text-center p-4">
                    Spare is a platform that allows people to buy and sell gently used items. We believe in giving pre-loved
                    treasures a new life and promoting a more sustainable way of shopping. Whether you're looking for a
                    unique piece of furniture,a stylish piece of clothing, or something in between, you're sure to find it
                    on Spare.
                </p>
                <p class="text-sm text-gray-700 leading-relaxed text-center p-4">
                    Our mission is to make it easy for people to declutter their homes and find new homes for their unwanted
                    items. We also want to make it affordable for people to find unique and stylish items without breaking
                    the bank.
                </p>
                <div class="flex justify-center"><a href="#"
                        class="inline-flex  mt-4 items-center px-4 py-2 rounded-md bg-green-500 text-white font-bold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Check Now
                    </a></div>
            </div>
        </div>
    </main>

    <!-- container with content -->

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 bg-gray-200">
        <!--FIRST (SLIDER)-->
        <div class="swiper relative w-full h-50 p-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('asset/images/blog2.jpg') }}" alt="" class="object-center object-cover rounded-2xl w-50 h-50 ">
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative ">
                    <img src="{{ asset('asset/images/blog3.jpg') }}" alt="" class="object-center object-cover rounded-2xl w-50 h-50">

                </div>
            </div>

        </div>

        <!--user Experience  -->
        <div class="">
            <h1 class="text-center text-red-500 font-bold lg:text-2xl mt-4 lg:mb-8 p-4">Focus On User-Friendly Experience
            </h1>
            <p class="text-center lg:text-lg p-4">There are some websites, which are so advanced that only a skilled
                <br>person can operate. Everyone is using online platforms,<br> from school-going children to senior
                citizens. <br>, your website should have innovative features that deliver <br>an excellent user experience,
                and anyone can easily understand irrespective of age, <br>qualification, employment field, etc.
            </p>
        </div>
    </div>



    <!-- contact div -->
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
                                <br> Branch office: J1/20 Awas Vikas No 1 Keshavpuram Kalyanpur kanpur 208017</span>
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
