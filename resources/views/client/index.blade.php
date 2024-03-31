@extends('layouts.navbar')

@section('content')

    <div class="h-full bg-gray-200 p-8 mt-16">
        <div class="bg-white rounded-lg shadow-xl pb-8">
            <div class="w-full h-[250px]">
                <img src="storage/images/image.png"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="storage/images/v56_47.png"
                    class="w-40 border-4 border-white rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl">Mustapha Ouchin</p>
                    <span class="bg-blue-500 rounded-full p-1" title="Verified">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                <div class="flex items-center space-x-4 mt-2">
                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-gray-900 font-bold">Informations Personnelles</h4>
                    <ul class="mt-2 text-gray-700">
                        <li class="flex border-y py-2">
                            <span class="font-bold w-24">Full name:</span>
                            <input type="text" class="text-gray-700 flex-1 outline-none" value="Mustapha Ouchin">
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Username :</span>
                            <input type="text" class="text-gray-700 flex-1 outline-none"
                                value="Ouchin55edcx">
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Phone :</span>
                            <input type="text" class="text-gray-700 flex-1 outline-none" value="(123) 123-1234">
                        </li>
                        <li class="flex border-b py-2">
                            <span class="font-bold w-24">Email :</span>
                            <input type="text" class="text-gray-700 flex-1 outline-none"
                                value="ouchinmustapha@example.com">
                        </li>
                    </ul>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">Save change</button>
                </div>


                <div class="flex-1 bg-white rounded-lg shadow-xl p-8 mt-8">
                    <div class="flex  justify-between border-b-2 border-gray-700">
                        <div>
                            <h4 class="">Your Content </h4>
                        </div>
                        <div class="relative m-4">
                            <!-- Select Option -->
                            <select class="">
                                <option value="">filter</option>
                                <option value="questions">Questions</option>
                                <option value="posts">Posts</option>
                            </select>
                        </div>
                    </div>
                    <!-- Content Display Based on Selection -->
                    <div class="mt-4">
                        <!-- Display Questions -->
                        <div id="questions" class="hidden">
                            <h5 class="font-bold text-lg text-gray-900 mb-2">Your Questions</h5>
                            <!-- Loop through and display question titles -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm text-gray-500">
                                                            Question Posted 6h ago
                                                        </div>
                                                        <div class="text-2xl font-bold text-gray-900">
                                                            <a href="#"
                                                                class="underline text-black hover:text-blue-700">How can I
                                                                secure my WhatsApp?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    Upvotes
                                                </div>
                                                <div class="text-2xl font-bold text-gray-900">
                                                    -
                                                </div>
                                            </td>
                                            <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    Comments
                                                </div>
                                                <div class="text-2xl font-bold text-gray-900">
                                                    -
                                                </div>
                                            </td>
                                            <td class="px-4 md:px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <a href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 0 24 24" width="34px" fill="#92929D">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path
                                                            d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <!-- Display Posts -->
                        <div id="posts" class="hidden">
                            <h5 class="font-bold text-lg text-gray-900 mb-2">Your Posts</h5>
                            <!-- Loop through and display post titles -->
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm text-gray-500">
                                                        Post . posted in 6h ago
                                                    </div>
                                                    <div class="text-2xl font-bold text-gray-900">
                                                        <a href=""
                                                            class="underline text-black hover:text-blue-700">Google
                                                            Introduces Enhanced Real-Time <br> URL Protection
                                                            for Chrome Users</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                Upvotes
                                            </div>
                                            <div class="text-2xl font-bold text-gray-900">
                                                5 </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                Comments
                                            </div>
                                            <div class="text-2xl font-bold text-gray-900">
                                                2
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 0 24 24" width="34px" fill="#92929D">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm text-gray-500">
                                                        Post . posted in 6h ago
                                                    </div>
                                                    <div class="text-2xl font-bold text-gray-900">
                                                        <a href=""
                                                            class="underline text-black hover:text-blue-700">Google
                                                            Introduces Enhanced Real-Time <br> URL Protection
                                                            for Chrome Users</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                Upvotes
                                            </div>
                                            <div class="text-2xl font-bold text-gray-900">
                                                5 </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500">
                                                Comments
                                            </div>
                                            <div class="text-2xl font-bold text-gray-900">
                                                2
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                    viewBox="0 0 24 24" width="34px" fill="#92929D">
                                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                                    <path
                                                        d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <script>
                    // JavaScript to toggle visibility based on selected option
                    document.querySelector('select').addEventListener('change', function() {
                        // Hide all content sections
                        document.querySelectorAll('.hidden').forEach(function(element) {
                            element.style.display = 'none';
                        });

                        // Get the selected option value
                        var selectedOption = this.value;

                        // Show the corresponding content section
                        document.getElementById(selectedOption).style.display = 'block';
                    });
                </script>
                

            </div>

        </div>


    </div>

@endsection