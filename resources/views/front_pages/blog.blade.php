{{-- @extends('components.main')
@section('content')
    <div class="container mx-auto mt-10 mb-10">
        <h1 class="text-4xl font-bold mb-10 text-center text-gray-800">Blog Posts</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Post 1 -->
            <div
                class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                <img src="https://via.placeholder.com/400x200" alt="Post Image 1" class="w-full h-48 object-cover">
                <div class="p-6 bg-white bg-opacity-75">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Post Title 1</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia
                        odio vitae vestibulum vestibulum.</p>
                    <a href="post1.html" class="text-purple-700 hover:text-purple-900 hover:underline">Read More</a>
                </div>
            </div>
            <!-- Post 2 -->
            <div
                class="bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                <img src="https://via.placeholder.com/400x200" alt="Post Image 2" class="w-full h-48 object-cover">
                <div class="p-6 bg-white bg-opacity-75">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Post Title 2</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia
                        odio vitae vestibulum vestibulum.</p>
                    <a href="post2.html" class="text-green-700 hover:text-green-900 hover:underline">Read More</a>
                </div>
            </div>
            <!-- Post 3 -->
            <div
                class="bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                <img src="https://via.placeholder.com/400x200" alt="Post Image 3" class="w-full h-48 object-cover">
                <div class="p-6 bg-white bg-opacity-75">
                    <h2 class="text-2xl font-bold mb-3 text-gray-800">Post Title 3</h2>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia
                        odio vitae vestibulum vestibulum.</p>
                    <a href="post3.html" class="text-yellow-700 hover:text-yellow-900 hover:underline">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('components.main')

@section('content')
<div class="container mx-auto mt-10 mb-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl sm:text-5xl font-bold mb-10 text-center text-gray-800">Blog Posts</h1>
    
    <div class="flex flex-wrap gap-4 justify-center">
        @foreach ($categories as $category)
            <a href="{{ route('blogs', ['category' => $category->id]) }}" class="bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:from-blue-500 hover:via-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition duration-300 mb-4 sm:mb-6 transform hover:scale-105 text-center w-full sm:w-auto">
                {{ $category->title }}
            </a>
        @endforeach
    </div>
</div>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 mb-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($blogs as $blog)
            <div class="bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-48 sm:h-56 md:h-64 lg:h-72 object-cover">
                <div class="p-6 bg-white bg-opacity-75">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-3 text-gray-800">{{ $blog->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ $blog->description }}</p>
                    <a href="{{ route('blogdetails', $blog->id) }}" class="text-purple-700 hover:text-purple-900 hover:underline font-semibold">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
