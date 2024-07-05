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
    <div class="container mx-auto py-6">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-4">
            <!-- Left Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">We've Successfully Delivered Over</h1>
                    <p class="text-gray-600">Leads For The Client</p>
                </div>
                <div class="text-gray-700">
                    <p class="mb-2"><span class="font-semibold">16+</span> Years In Business</p>
                    <p class="mb-2"><span class="font-semibold">832+</span> Projects Completed</p>
                    <p><span class="font-semibold">100+</span> Experts</p>
                </div>
            </div>

            <!-- Right Section -->
            <div class="bg-slate-600 p-6 rounded-lg shadow-lg text-white">
                <ul class="space-y-4">
                    <li class="text-lg font-semibold">Discuss Your Ideas</li>
                    <li class="text-lg">+1 617-934-6763</li>
                    <li>
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
                            Connect Now
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
