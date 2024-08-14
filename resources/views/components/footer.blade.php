
<!-- Footer Start-->
<footer class="bg-black text-white">
    <div class="container mx-auto py-12 grid grid-cols-1 lg:grid-cols-4 gap-2">

        <!-- Company Section -->
        <div class="px-8">
            <h2 class="text-2xl font-bold mb-4">Company</h2>
            <nav>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="about.html" class="hover:underline">About us</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="contact.html" class="hover:underline">Contact us</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="product.html" class="hover:underline">Product</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="team.html" class="hover:underline">Team</a>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="service.html" class="hover:underline">Services</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Contact Section -->
        <div class="px-6">
            <h2 class="text-2xl font-bold mb-4">Contact</h2>
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
            <div class="mt-4 flex space-x-4">
                <a href="#" class="hover:bg-blue-800 p-2 rounded-full"><i class="ri-twitter-fill"></i></a>
                <a href="#" class="hover:bg-blue-800 p-2 rounded-full"><i class="ri-facebook-fill"></i></a>
                <a href="#" class="hover:bg-blue-800 p-2 rounded-full"><i class="ri-linkedin-fill"></i></a>
                <a href="#" class="hover:bg-pink-800 p-2 rounded-full"><i class="ri-instagram-fill"></i></a>
                <a href="#" class="hover:bg-red-800 p-2 rounded-full"><i class="ri-youtube-fill"></i></a>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="px-12">
            <h2 class="text-2xl font-bold mb-4">Gallery</h2>
            <div class="grid grid-cols-3 gap-2">
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog1.avif') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog2.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog3.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
            </div>
            <div class="grid grid-cols-3 gap-2 mt-2">
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog4.avif') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog5.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
                <div class="bg-white p-2">
                    <img src="{{ asset('asset/images/blog6.jpg') }}" alt="Gallery image"
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="px-8">
            <h2 class="text-2xl font-bold mb-4">Newsletter</h2>
            <p class="mb-4">Subscribe to our newsletter for the latest updates.</p>
            <form class="flex flex-col md:flex-row bg-white">
                <input type="email" placeholder="Your Email"
                    class="w-full md:flex-1 p-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500"
                    required>
                <button type="submit"
                    class="mt-2 md:mt-0 md:ml-2 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-500">Sign
                    up</button>
            </form>
            {{-- <a href="www.emcotechms.co.in"> <li>
                <i class="ri-earth-line"></i>
                <span>Website: www.emcotechms.co.in
                </span>
            </li></a> --}}
        </div>
    </div>

    <!-- Base Footer -->
    <div class="bg-black py-4 text-center">
  <a href="https://realvictorygroups.com/"><p>© 2024-Designed by Real Victory Groups</p></a>
    </div>
</footer>

<!-- Footer End-->
