@extends('layouts.sidebar')

@section('content')

    {{-- display cousres table  --}}
    <div class="mt-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-2xl font-bold">Categories</h1>

                <a href="{{route('addCourse.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="openModal()">
                    + Add Category
                </a>
            </div>

            <div class="bg-white shadow-md rounded">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Name</th>
                            <th class="py-3 px-6 text-left">Description</th>
                            <th class="py-3 px-6 text-left">Image</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        {{-- @foreach ($categories as $category) --}}
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">#</td>
                                <td class="py-3 px-6 text-left">#</td>
                                <td class="py-3 px-6 text-left">
                                   <img src="#"
                                            alt="#" class="h-10 w-auto">
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex justify-center items-center">
                                        <!-- HTML -->

                                        <a href="#" class="text-blue-500 hover:text-blue-700 mr-2"
                                            >
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                            </svg>
                                        </a>

                                        <form action="#}"
                                            method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
