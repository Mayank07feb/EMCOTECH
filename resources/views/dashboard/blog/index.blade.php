@extends('dashboard.layout.root')

@section('content')
    {{-- <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8"> --}}
    <div class="px-4 py-6 sm:px-0">
        <h1 class="text-4xl font-bold mb-6 text-center text-gray-800">Simple Table</h1>
        <a href="{{ route('blog.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4 inline-block">Create
            Blog</a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-xs leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Category</th>
                        <th class="py-3 px-6 text-left">Image</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    @foreach ($blogs as $blog)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                            <td class="py-3 px-6 text-left text-blue-500 hover:text-blue-700 max-w-xs">
                                {{ $blog->title }}
                            </td>
                            <td class="py-3 px-6 text-left max-w-xs">{{ $blog->description }}</td>
                            <td class="py-3 px-6 text-left">{{ $blog->category->title }}</td>
                            <td class="py-3 px-6 text-left">
                                <img src=" {{ $blog->image ? asset('storage/' . $blog->image) : asset('dash_asset/img/logo.png') }}"
                                    alt="{{ $blog->title }}" class="w-20 h-20 object-cover rounded">
                            </td>
                            <td class="py-3 px-6 text-left">
                                <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                <a href="{{ route('blog.delete', ['blog' => $blog->id]) }}"
                                    class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
