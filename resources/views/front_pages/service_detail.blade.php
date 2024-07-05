@extends('components.main')
@section('content')
    <!-- About Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold">Service Details</h2>

                <ul class="flex gap-2 justify-center">
                    <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                    <li> <a href="{{ route('servicedetails') }}" class="hover:underline">/Service details</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Details -->

    <div class="text-center text-lg p-6">In the digital age, where our reliance on computers has become paramount, ensuring
        the health and performance of our PCs is crucial. Over time, our computers can accumulate clutter, encounter errors,
        and even fall victim to malware and viruses. Fortunately, there are numerous free PC scanning software options
        available that can help diagnose issues and optimize system performance without costing a dime. In this article,
        we’ll explore the benefits of free PC scanning software and highlight some of the best options available to users.
    </div>

    <main class="container mx-auto py-12 px-4 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column (Images) -->
            <div class="lg:col-span-2">
                <div class="mb-6">
                    <img src="{{ asset('asset/images/service1-min.jpg') }}" alt="Spare Part"
                        class="w-full h-96 object-cover rounded-lg shadow-lg">
                </div>
                <div class="grid grid-cols-3 gap-4 m-4">
                    <img src="{{ asset('asset/images/service2-min.jpg') }}" alt="Spare Part 1"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                    <img src="{{ asset('asset/images/service3-min.jpg') }}" alt="Spare Part 2"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                    <img src="{{ asset('asset/images/service4-min.jpg') }}" alt="Spare Part 3"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                </div>
                <div class="grid grid-cols-3 gap-4 m-4">
                    <img src="{{ asset('asset/images/service2-min.jpg') }}" alt="Spare Part 1"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                    <img src="{{ asset('asset/images/service3-min.jpg') }}" alt="Spare Part 2"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                    <img src="{{ asset('asset/images/service4-min.jpg') }}" alt="Spare Part 3"
                        class="w-full h-32 object-cover rounded-lg shadow-lg">
                </div>
            </div>

            <!-- Right Column (Details) -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Service Title</h2>
                <p class="text-gray-700 mb-4">This is a detailed description of the spare part service. It covers all the
                    necessary information that customers need to know about this service, including features, benefits, and
                    usage instructions.</p>

                <h3 class="text-xl font-semibold text-gray-900 mb-2">Specifications:</h3>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>High quality material</li>
                    <li>Durable and long-lasting</li>
                    <li>Available in various sizes</li>
                    <li>Affordable pricing</li>
                </ul>

                <h3 class="text-xl font-semibold text-gray-900 mb-2">Features:</h3>
                <ul class="list-disc list-inside text-gray-700 mb-4">
                    <li>Easy installation</li>
                    <li>Compatible with multiple models</li>
                    <li>Warranty included</li>
                    <li>Excellent customer support</li>
                </ul>

                <h3 class="text-xl font-semibold text-gray-900 mb-2">Price:</h3>
                <p class="text-gray-700 mb-4">$199.99</p>

                <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Add to Cart</button>
            </div>
        </div>
    </main>
@endsection
