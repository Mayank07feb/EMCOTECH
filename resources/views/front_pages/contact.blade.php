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
    @include('front_pages.info-form')
    <!-- map -->
    <div class="w-full">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6814.7222848077745!2d75.474458!3d31.349012000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a4fb0a4e9031d%3A0x9ea33f755767bc86!2sperfect%20belts%20ltd.!5e0!3m2!1sen!2sin!4v1718965039432!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class="w-full"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
