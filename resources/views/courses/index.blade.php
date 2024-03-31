@extends('layouts.navbar')

@section('content')
    <section class="bg-white dark:bg-gray-900 flex justify-between"
        style="background-image: url('storage/images/learnbg.png'); background-size: cover; object-fit: cover; width: 100%;">
        <div class="py-8 mx-12 ">
            <h1 class="mb-4 text-5xl font-extrabold text-white">Learn</h1>
            <div class="flex items-center gap-2 bg-[#05192D] max-w-sm p-1 rounded">
                <img src="storage/images/news.png" alt="" class="w-6 h-6">
                <h2 class="text-white">Hands-on Hacking</h2>
            </div>
            <p class="mb-8 mt-4 text-lg font-normal text-white">Our content is guided with interactive exercises based
                on real world scenarios, from <br>
                hacking machines to investigating attacks, we've got you covered.</p>
        </div>
        <div class="hidden md:flex items-center justify-end mx-12">
            <img src="storage/images/learn.png" alt="">
        </div>
    </section>


    <section class="mt-8 md:ml-8">
        <div class="p-4 mx-auto">
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-black">From the blog
                </h1>
                <p class="text-gray-600">Get started with the fundamentals of penetration testing. Learn how to
                    identify vulnerabilities, exploit weaknesses, and secure systems.</p>
            </div>
        </div>
    </section>



    <!-- component -->
    <div class="">
        <div class="container mx-auto mx-auto p-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4">
                <!-- Replace this with your grid items -->
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/presecurity.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/SOCL2-square.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="h-10 flex justify-between items-center px-3">
                        <h3 class="text-white font-bold bg-gray-700 rounded-full m-1 p-1"> Security</h3>
                    </div>

                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/security-engineer.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/devsecops.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/redteaming.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/cyberdefense.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/offensivepentesting.jpg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg border p-4">
                    <img src="https://assets.tryhackme.com/img/paths/web.svg" alt="Placeholder Image"
                        class="w-full h-48 rounded-md object-cover">
                    <div class="px-1 py-4">
                        <div class="font-bold text-xl mb-2">Blog Title</div>
                        <p class="text-gray-700 text-base">
                            This is a simple blog card example using Tailwind CSS. You can replace this text with your
                            own blog content.
                        </p>
                    </div>
                    <div class="px-1 py-4">
                        <a href="#" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>
        </div>
    </div>
@endsection