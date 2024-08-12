@extends('components.main')

@section('content')
<div class="container mx-auto mt-10 mb-10 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <h1 class="text-4xl sm:text-5xl font-extrabold mb-10 text-center text-gray-800">Blog Post Details</h1>

        <!-- Replace this with your dynamic content -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-300">
            <img src="https://via.placeholder.com/800x400" alt="Post Image" class="w-full h-56 sm:h-64 md:h-72 lg:h-80 object-cover">
            <div class="p-6">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-800">Post Title</h2>
                <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.</p>
                <p class="text-gray-600 mb-6">Additional content here...</p>
                <a href="{{ route('blogs') }}" class="inline-block text-blue-500 hover:text-blue-700 hover:underline font-semibold transition duration-300">Back to All Posts</a>
            </div>
        </div>
        <!-- End dynamic content -->

    </div>
</div>
@endsection
