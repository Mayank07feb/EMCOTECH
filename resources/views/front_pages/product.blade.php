@extends('components.main')
@section('content')
    <!-- About Section -->
    <section class="relative bg-black text-white py-12">
        <div class="absolute inset-0 opacity-45">
            <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto relative z-10">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold">Product Gallery</h2>

                <ul class="flex gap-2 justify-center">
                    <li> <a href="index.html" class="hover:underline">Home</a></li>
                    <li> <a href="product.html" class="hover:underline">/Product</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Products -->
    <h1 class="text-center font-bold text-2xl mt-6 text-red-500">Product Gallery</h1>
    <div>
        <nav class="lg:m-6 m-2">
            <ul class="flex lg:space-x-4 space-x-2 justify-center">
                <li><button class="filter-btn lg:px-4 px-1 py-2 bg-blue-500 text-white rounded"
                        data-filter="all">All</button></li>
                <li><button class="filter-btn lg:px-4 px-1 py-2 bg-blue-500 text-white rounded"
                        data-filter="vehicles">Transformer</button></li>
                <li><button class="filter-btn lg:px-4 px-1 py-2 bg-blue-500 text-white rounded"
                        data-filter="machines">Machines</button></li>
                <li><button class="filter-btn lg:px-4 px-1 py-2 bg-blue-500 text-white rounded"
                        data-filter="other-parts">Vehichles</button></li>
            </ul>
        </nav>

        <div class="second-container mx-auto py-6 lg:px-16">
            <div class="main-row grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                <!--box-1-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item vehicles">
                    <img src="{{ asset('asset/images/product-1.jpg') }}" alt="Vehicles"
                        class="rounded-3xl h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110 cursor-pointer"
                        onclick="showModal(this)">
                </div>

                <!--box-2-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item vehicles">
                    <img src="{{ asset('asset/images/product-2.jpg') }}" alt="Vehicles"
                        class="rounded-3xl h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-3-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item vehicles">
                    <img src="{{ asset('asset/images/product-3.jpg') }}" alt="Vehicles"
                        class=" object-cover rounded-3xl lg:mb-2 h-full transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-4-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item transformer">
                    <img src="{{ asset('asset/images/product-4-min.jpg') }}" alt="Transformer"
                        class="rounded-3xl object-fill transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-5-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item transformer">
                    <img src="{{ asset('asset/images/product-5-min.jpg') }}" alt="Transformer"
                        class="rounded-3xl h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-6-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item transformer">
                    <img src="{{ asset('asset/images/product-6.jpg') }}" alt="Transformer"
                        class="rounded-3xl h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-7-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item transformer">
                    <img src="{{ asset('asset/images/product-7.jpg') }}" alt="Transformer"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-8-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item vehicles">
                    <img src="{{ asset('asset/images/product-8.jpg') }}" alt="Vehicles"
                        class="rounded-3xl h-full object-fill transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-9-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item machines">
                    <img src="{{ asset('asset/images/product-9.jpg') }}" alt="Machines"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-10-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item machines">
                    <img src="{{ asset('asset/images/product-10.jpg') }}" alt="Machines"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-11-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item machines">
                    <img src="{{ asset('asset/images/product-19-min.jpg') }}" alt="Machines"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-12-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item machines">
                    <img src="{{ asset('asset/images/product-12-min.jpg') }}" alt="Machines"
                        class="rounded-3xl  h-full object-fill transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-13-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-13-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-14-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-14-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-15-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-15-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-16-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-16-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full object-fill transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-17-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-17-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-18-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-18-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-19-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-19-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-20-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-20-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full object-fill transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>

                <!--box-21-->
                <div
                    class="box bg-white rounded-3xl flex flex-col items-center justify-center lg:p-2 shadow-xl image-item other-parts">
                    <img src="{{ asset('asset/images/product-21-min.jpg') }}" alt="Other Parts"
                        class="rounded-3xl  h-full lg:mb-2 transform transition-transform duration-500 hover:scale-110"
                        onclick="showModal(this)">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-75 items-center justify-center hidden">
        <div class="relative bg-white rounded-lg p-4 max-w-xl mx-auto">
            <span class="absolute top-2 right-2 text-black cursor-pointer" onclick="closeModal()">&#10006;</span>
            <img id="modal-image" src="" alt="Full Image" class="rounded-lg">
        </div>
    </div>
@endsection
