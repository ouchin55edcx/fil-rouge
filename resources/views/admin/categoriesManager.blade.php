<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- component -->
    <div class="min-h-screen bg-gray-50/50">

        <aside
            class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-72 rounded-xl transition-transform duration-300 xl:translate-x-0">
            <div class="relative border-b border-white/20">
                <a class="flex items-center gap-4 py-6 px-8" href="#/">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-white">
                        Material Tailwind Dashboard</h6>
                </a>
                <button
                    class="middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50  w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-white hover:bg-white/10 active:bg-white/30 absolute right-0 top-0 grid rounded-br-none rounded-tl-none xl:hidden"
                    type="button">
                    <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="m-4">
                <ul class="mb-4 flex flex-col gap-1">

                    <li>
                        <a aria-current="page" class="active" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg  text-white shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/40 active:opacity-[0.85] w-full flex items-center gap-4 px-4 capitalize focus"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path
                                        d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z">
                                    </path>
                                    <path
                                        d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z">
                                    </path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    dashboard</p>
                            </button>
                        </a>
                    </li>

                    <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 focus:bg-gradient-to-tr from-blue-600 to-blue-400 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Posts Manager
                                </p>
                            </button>

                        </a>
                    </li>


                    <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize focus:bg-gradient-to-tr from-blue-600 to-blue-400 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize ">
                                    Courses Manager</p>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Categories Manager</p>
                            </button>
                        </a>
                    </li>

                    <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize focus:bg-gradient-to-tr from-blue-600 to-blue-400 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    User Manager</p>
                            </button>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    notifactions</p>
                            </button>
                        </a>
                    </li> --}}

                </ul>
                <ul class="mb-4 flex flex-col gap-1">
                    <li class="mx-3.5 mt-4 mb-2">
                        <p
                            class="block antialiased font-sans text-sm leading-normal text-white font-black uppercase opacity-75">
                            auth pages</p>
                    </li>
                    <li>
                        <a class="" href="#">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="w-5 h-5 text-inherit">
                                    <path fill-rule="evenodd"
                                        d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize focus:bg-gradient-to-tr from-blue-600 to-blue-400 w-full flex items-center gap-4 px-4 capitalize">
                                    log out</p>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="p-4 xl:ml-80">

            {{-- display category table  --}}
            <div class="mt-12">
                <div class="container mx-auto px-4">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-2xl font-bold">Categories</h1>
                        <button id='openModel'
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            onclick="openModal()">
                            + Add Category
                        </button>
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
                                @foreach ($categories as $category)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">{{ $category->name }}</td>
                                        <td class="py-3 px-6 text-left">{{ $category->description }}</td>
                                        <td class="py-3 px-6 text-left">
                                            @if ($category->image)
                                                <img src="{{ asset('storage/' . $category->image->path) }}"
                                                    alt="{{ $category->name }}" class="h-10 w-auto">
                                            @else
                                                No image
                                            @endif
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex justify-center items-center">
                                                <!-- HTML -->
                                        
                                                <a href="#" class="text-blue-500 hover:text-blue-700 mr-2" onclick="openEditModal({{ $category->id }}, '{{ $category->name }}', '{{ $category->description }}')">
                                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('categoriesManager.destroy', $category->id) }}"
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            {{-- add categorie popup  --}}
            <div class="fixed z-10 inset-0 overflow-y-auto hidden" id="modal">
                <div class="fixed  inset-0 bg-gray-500 bg-opacity-75 z-[-1]"></div>
                <div class="flex items-center justify-center min-h-screen">
                    <div class="bg-white rounded-lg  p-6 max-w-md">
                        <h2 class="text-xl font-bold mb-4">Add Category</h2>
                        <!-- Add your form fields here -->
                        <form method="POST" action="{{ route('categoriesManager.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2" for="name">
                                    Category Name
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" name="name" type="text" required>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2" for="description">
                                    Description
                                </label>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="description" name="description"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2" for="image">
                                    Category Image
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="image" name="image" type="file" required>
                            </div>
                            <div class="flex items-center justify-between">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Add Category
                                </button>
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    onclick="closeModal()">
                                    Close
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>




        </div>

        <!-- resources/views/components/edit-category-modal.blade.php -->
        <div id="editCategoryModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
            <div class="flex items-center justify-center min-h-screen">
                <div class="bg-white rounded-lg overflow-hidden shadow-xl p-6">
                    <h2 class="text-xl mb-4">Edit Category</h2>
                    <!-- Form for editing category -->
                    <form id="editCategoryForm"  action="#" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="categoryId" name="categoryId">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="categoryName">
                                Category Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categoryName" name="name" type="text" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="categoryDescription">
                                Description
                            </label>
                            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categoryDescription" name="description"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="categoryImage">
                                Category Image
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categoryImage" name="image" type="file">
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" id="saveCategory">
                                Save
                            </button>
                            <button class="ml-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="cancelEdit">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
    <script>
        // Add this JavaScript code to show/hide the modal
        function openModal() {
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>

<script>
    function openEditModal(categoryId, categoryName, categoryDescription) {
        document.getElementById('editCategoryModal').classList.remove('hidden');
        document.getElementById('categoryId').value = categoryId;
        document.getElementById('categoryName').value = categoryName;
        document.getElementById('categoryDescription').value = categoryDescription;
    }

    document.getElementById('cancelEdit').addEventListener('click', function() {
        document.getElementById('editCategoryModal').classList.add('hidden');
    });

    document.getElementById('editCategoryForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const categoryId = document.getElementById('categoryId').value;
        const categoryName = document.getElementById('categoryName').value;
        const categoryDescription = document.getElementById('categoryDescription').value;
        const categoryImage = document.getElementById('categoryImage').files[0];

        // Create a FormData object to send the data to the server
        const formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('categoryId', categoryId);
        formData.append('name', categoryName);
        formData.append('description', categoryDescription);
        if (categoryImage) {
            formData.append('image', categoryImage);
        }

        // Send the AJAX request to update the category
        fetch(`/categories/${categoryId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data);
            // Handle the response from the server
            document.getElementById('editCategoryModal').classList.add('hidden');
            // Optionally, you can update the category row in the table with the new data
        })
        .catch(error => {
            console.error(error);
            // Handle the error
        });
    });
</script>
