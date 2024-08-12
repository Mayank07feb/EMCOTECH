@extends('dashboard.layout.root')

@section('content')

@if ($errors->any())
    <ul class="list-disc list-inside text-red-500">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="max-w-2xl mx-auto bg-blue-200 p-8 rounded-lg shadow-lg mt-10 mb-10">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Edit Your Blog</h1>
    
    <form action="{{ route('blog.update', ['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Blog Title:</label>
            <input type="text" id="title" name="title" value="{{$blog->title}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <!-- Description -->
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea id="description" name="description" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{$blog->description}}</textarea>
        </div>

        <!-- Image Upload -->
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Image:</label>
            <input type="file" id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            <img src="{{asset('storage/'.$blog->image)}}" alt="">
        </div>

        <!-- Category Dropdown -->
        <div class="mb-4">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
            <select id="category_id" name="category_id"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $blog->category_id ? 'selected' : ''}} >{{$category->title}}</option>
                @endforeach

            </select>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection
