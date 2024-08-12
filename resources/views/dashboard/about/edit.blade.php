@extends('dashboard.layout.root')

@section('content')
    <div class="px-4 py-6 sm:px-0">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">{{ isset($entry) ? 'Edit About Us Entry' : 'Create About Us Entry' }}</h1>
        <form action="{{ isset($entry) ? route('about-us.update', $entry->id) : route('about-us.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($entry))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $entry->title ?? '') }}" class="form-input mt-1 block w-full" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea id="description" name="description" class="form-textarea mt-1 block w-full" rows="4" required>{{ old('description', $entry->description ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700">Image</label>
                <input type="file" id="image" name="image" class="form-input mt-1 block w-full">
                @if(isset($entry) && $entry->image)
                    <img src="{{ asset('storage/' . $entry->image) }}" alt="{{ $entry->title }}" class="mt-2 w-32 h-32 object-cover rounded">
                @endif
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ isset($entry) ? 'Update' : 'Create' }}
            </button>
        </form>
    </div>
@endsection
