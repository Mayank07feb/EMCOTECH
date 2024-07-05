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

    <section class="about-us container mx-auto px-4 py-8 md:px-8 lg:px-20 lg:mt-8">
        <h1 class="text-center font-bold text-2xl mb-6 text-red-500">About us</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="img">
                <img src="{{ asset('asset/images/1711950959822.jpeg') }}" alt=".." class="h-full w-full">
            </div>
            <div class="text">

                <p class="text-justify leading-relaxed">
                    PERFECT, established in 1996, is a leading organization specializing in the manufacturing of exclusive
                    spare
                    parts for a wide range of machinery used in the production of PP Woven Sacks. Initially focusing on
                    Heddle
                    belts and Grommet bands, we have steadily expanded our expertise to cater to the growing needs of our
                    valued
                    customers. Today, we proudly manufacture over 2,500 different spare parts in various sizes and
                    dimensions,
                    potentially the first company in the industry to offer such a comprehensive selection under one roof.
                </p>
                <p class="text-justify leading-relaxed">
                    For international exports, we have established a robust marketing network. We collaborate with dedicated
                    distributors in Pakistan, Iran, Turkey, Egypt, Indonesia, Thailand, Vietnam, and Brazil. Additionally,
                    we have
                    established a network of agents and sales representatives in select territories, ensuring comprehensive
                    market
                    coverage. Our success in exporting our products hinges on the unwavering trust we have built with our
                    overseas
                    customers.
                </p>
            </div>
        </div>
    </section>
    <!-- SEERVICES -->
    <section class="services bg-gray-100 py-16">
        <div class="container mx-auto px-4 md:px-8 lg:px-20">
            <h1 class="text-center text-3xl font-bold mb-8 text-red-500">Our Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- card1 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div>
                        <img src="{{ asset('asset/images/service1-min.jpg') }}" alt="" class="object-cover">
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
                    <div><img src="{{ asset('asset/images/service2-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Power Quality Ananlytics</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts you
                        need
                        quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
                <!-- card3 -->
                <div class="service-card shadow-green-500 hover:shadow-green-700 p-4 bg-white rounded-md px-4 py-2">
                    <div><img src="{{ asset('asset/images/service3-min.jpg') }}" alt="" class="object-cover"></div>
                    <i class="fas fa-truck text-4xl text-green-500 mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Electrical</h3>
                    <p class="text-gray-700">We deliver spare parts to over 92 countries, ensuring you receive the parts
                        you need
                        quickly.</p>
                    <a href="{{ route('servicedetails') }}" class="text-red-500 hover:underline">View Details</a>
                </div>
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

    <!-- Product Section -->
    <h1 class="text-center text-3xl font-bold mt-8 text-red-500"> Our Products</h1>
    <main class="container mx-auto py-12">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- product Post 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category1.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Understanding Spare Parts Management</h3>
                <p class="text-gray-700 mb-4">Efficient spare parts management is crucial for minimizing downtime and
                    maintaining smooth operations...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">Veiw all Products </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category2.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Understanding Spare Parts Management</h3>
                <p class="text-gray-700 mb-4">Efficient spare parts management is crucial for minimizing downtime and
                    maintaining smooth operations...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">Veiw all Products </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category3.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Understanding Spare Parts Management</h3>
                <p class="text-gray-700 mb-4">Efficient spare parts management is crucial for minimizing downtime and
                    maintaining smooth operations...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">Veiw all Products </a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div><img src="{{ asset('asset/images/category4.jpeg') }}" alt="Blog post image"
                        class="w-full h-48 object-cover rounded-md mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Understanding Spare Parts Management</h3>
                <p class="text-gray-700 mb-4">Efficient spare parts management is crucial for minimizing downtime and
                    maintaining smooth operations...</p>
                <a href="{{ route('products') }}" class="text-red-500 hover:underline">Veiw all Products </a>
            </div>
        </div>
    </main>

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
    </section>

    <!-- OUR EXEPERT TEAM -->
    <!-- Our Team Section -->
    <section class=" py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center text-red-500">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Team Member 1 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team1-min.jpg') }}" alt="Photo of John Doe"
                            class="w-full rounded-md">
                    </div>
                    <h3 class="text-xl font-bold mb-2">John Doe</h3>
                    <p class="text-gray-700 mb-2">Lead Technician</p>
                    <p class="text-gray-600">John has over 10 years of experience in machinery maintenance and spare parts
                        management.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
                </div>

                <!-- Team Member 2 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team2-min.jpg') }}" alt="Photo of Jane Smith"
                            class="w-full rounded-md">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Jane Smith</h3>
                    <p class="text-gray-700 mb-2">Spare Parts Specialist</p>
                    <p class="text-gray-600">Jane is an expert in sourcing and managing a wide range of spare parts for PP
                        Woven
                        Sack production.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
                </div>

                <!-- Team Member 3 -->
                <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="team-photo mb-4">
                        <img src="{{ asset('asset/images/team3-min.jpg') }}" alt="Photo of Mosh Jith"
                            class="w-full rounded-md">
                    </div>
                    <h3 class="text-xl font-bold mb-2">Mosh Jith</h3>
                    <p class="text-gray-700 mb-2">Spare Parts Specialist</p>
                    <p class="text-gray-600">Mosh is proficient in sourcing and managing a wide range of spare parts for PP
                        Woven
                        Sack production.</p>
                    <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
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
    <section class="faq bg-gray-400 w-full py-16">
        <div class="container mx-auto px-4 md:px-8 lg:px-20">
            <h2 class="text-center text-2xl font-bold mb-8 text-red-500">Frequently Asked Questions</h2>
            <div id="accordionExample">
                <dl class="question mb-4 bg-gray-200 rounded-t-lg px-4 py-2">
                    <dt class="text-xl font-bold cursor-pointer flex justify-between items-center collapsed"
                        data-target="#collapseOne">
                        <span>What types of spare parts do you offer?</span>
                        <i class="fas fa-chevron-down"></i>
                    </dt>
                    <dd id="collapseOne" class="hidden">
                        <div class="answer px-4 pt-2 pb-4 border border-gray-300 rounded-b-lg">
                            <p class="text-gray-700 leading-relaxed">We offer a wide range of spare parts for various
                                machinery used in PP Woven Sack production. This includes parts for Heddle belts, Grommet
                                bands, Looms, Circular looms, Printing machines, Lamination machines, Sewing machines, and
                                more.</p>
                        </div>
                    </dd>
                </dl>
                <dl class="question mb-4 bg-gray-200 rounded-t-lg px-4 py-2">
                    <dt class="text-xl font-bold cursor-pointer flex justify-between items-center collapsed"
                        data-target="#collapseTwo">
                        <span>Do you ship internationally?</span>
                        <i class="fas fa-chevron-down"></i>
                    </dt>
                    <dd id="collapseTwo" class="hidden">
                        <div class="answer px-4 pt-2 pb-4 border border-gray-300 rounded-b-lg">
                            <p class="text-gray-700 leading-relaxed">Yes, we ship internationally to over 92 countries! We
                                can help ensure you receive the parts you need quickly and efficiently.</p>
                        </div>
                    </dd>
                </dl>
                <!-- Add more questions as needed -->
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
                <ul class="text-black mb-8">
                    <li class="mb-2 text-black"><i class="ri-map-pin-2-line mr-1"></i> 123 Street, New York, USA</li>
                    <li class="mb-2 text-black"><i class="ri-phone-fill mr-1"></i> +012 345 6789</li>
                    <li class="mb-2 text-black"><i class="ri-mail-open-fill mr-1"></i> info@example.com</li>
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
