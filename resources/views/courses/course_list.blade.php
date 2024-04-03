@extends('layouts.navbar')

@section('content')
    <section class=" text-[white]  bg-[#223654] overflow-y-hidden">
        <div class="flex gap-12 mx-8">
            <img src="https://assets.tryhackme.com/img/paths/presecurity.svg" alt="" class="w-24 h-32 ">
            <h1 class="text-white text-4xl font-bold mt-10">Introduction to Cyber Security</h1>
        </div>

        <div class="text-xl m-8 flex flex-col gap-12">
            <p>Cyber Security is a huge topic, and it can be challenging to know where to start. This path will give you a
                hands-on introduction to different areas within cyber, including:</p>

            <ul class="ml-24">
                <li>Careers in Cyber Security</li>
                <li>Offensive Security; hacking your first application</li>
                <li>Defensive Security; defending against a live cyber attack</li>
                <li>Exploring security topics in the industry</li>
            </ul>
        </div>

        {{-- <div class="text-xl flex flex-col  gap-8 m-12">
            <h2>No Prior Knowledge</h2>
            <p>You need no prerequisite to start this pathway! Just enthusiasm and excitement to learn!</p>
        </div> --}}
    </section>
    <!-- component -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://imgs.search.brave.com/ROK3Qtu-_mnp9F999LcmZaTlNRByHubEsDeSPFWCUQk/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/cHJlbWl1bS1waG90/by9mYWNlYm9vay1z/bWFydHBob25lXzEx/MDQ4OC0yNDUuanBn"
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="course_details"
                            class="block lg:hideen py-2 px-6 lg:ml-3 border-2 border-[#79BF00] hover:bg-[#79BF00] hover:text-white text-lg  text-black text-center  font-bold rounded-xl transition duration-200 cursor-pointer">
                            Start 
                        </a>
                    </div>
                </div>

                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://media.istockphoto.com/id/1654549279/photo/programmer-solving-detected-problem-on-laptop.webp?b=1&s=170667a&w=0&k=20&c=5mv5hSvMCKxljbuKerrF4PAqgYWgPY9u9ZegKVyHxX8="
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="#"
                            class=" py-2 px-4 max-w-md flex justify-center items-center bg-[#79BF00] border-2 border-[#79BF00] text-white border-2 border-white rounded-lg max-w-xl">
                            Start 
                        </a>
                    </div>
                </div>

                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://media.istockphoto.com/id/1455562255/photo/encryption-your-data-unique-digital-lock-big-data-security-safe-your-data-cyber-internet.webp?b=1&s=170667a&w=0&k=20&c=N4Z-OSD-wkWXRw5vI6FwwLYhm9RMQ7qOuSOgF7pZYAc="
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="#"
                            class=" py-2 px-4 max-w-md flex justify-center items-center bg-[#79BF00] border-2 border-[#79BF00] text-white border-2 border-white rounded-lg max-w-xl">
                            Start 
                        </a>
                    </div>
                </div>

                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://images.unsplash.com/photo-1603985529862-9e12198c9a60?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fGN5YmVyJTIwc2VjdXJpdHl8ZW58MHx8MHx8fDA%3D"
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="#"
                            class=" py-2 px-4 max-w-md flex justify-center items-center bg-[#79BF00] border-2 border-[#79BF00] text-white border-2 border-white rounded-lg max-w-xl">
                            Start 
                        </a>
                    </div>
                </div>

                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://images.unsplash.com/photo-1533709752211-118fcaf03312?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGN5YmVyJTIwc2VjdXJpdHl8ZW58MHx8MHx8fDA%3D"
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="#"
                            class=" py-2 px-4 max-w-md flex justify-center items-center bg-[#79BF00] border-2 border-[#79BF00] text-white border-2 border-white rounded-lg max-w-xl">
                            Start 
                        </a>
                    </div>
                </div>

                <div class="lg:flex ">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                        src="https://images.unsplash.com/photo-1614064641938-3bbee52942c7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y3liZXIlMjBzZWN1cml0eXxlbnwwfHwwfHx8MA%3D%3D"
                        alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{ route('course_details.index') }}"
                            class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2019</span>
                        <a href="#"
                            class=" py-2 px-4 max-w-md flex justify-center items-center bg-[#79BF00] border-2 border-[#79BF00] text-white border-2 border-white rounded-lg max-w-xl">
                            Start 
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
