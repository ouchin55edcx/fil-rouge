@extends('layouts.navbar')

@section('content')
<section class="bg-white dark:bg-gray-900 flex flex-col justify-between h-[35vh]" style="background-image: url('/storage/{{ $thisLesson->image->path }}'); background-size: cover; object-fit: cover; width: 100%;">
    <div>

    </div>

    <div class="flex flex-col sm:flex-row items-center justify-center bg-[rgba(21,27,39,0.85)] w-full p-1 sm:h-24 rounded">        
        <!-- Main content -->
        <div class="flex flex-col mt-4 sm:mt-0 sm:ml-4">
            <h1 class="text-white font-bold text-2xl sm:text-3xl">{{$thisLesson->title}}</h1>
            <p class="text-lg font-bold text-gray-400">{{$thisLesson->description}}</p>
        </div>
    </div>
    

</section>

<section>
   
    <!-- component -->
    <div class="bg-white mx-auto p-6 ">
        <div 
        class="bg-[#CBCBCB] rounded h-4 mb-4 " 
        role="progressbar" 
        :aria-valuenow="width"
        aria-valuemin="0"
        aria-valuemax="100"
        >
        <div 
            class="bg-[#CBCBCB] rounded h-4 text-center text-white text-sm transition"
            :style="`width: ${width}%; transition: width 2s;`" 
            x-text="`${width}%`"
            >
        </div>
    </div>
        <div class="mb-4">
            <div class="flex items-center justify-between bg-[#223654] pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer ">
                <div class="flex gap-12">
                    <span class="text-[#ECBB0A]">Task 1</span>
                    <h1 class="text-white">  What is Offensive Security?</h1>
                </div>
                <span class="h-6 w-6 flex items-center justify-center text-teal-500 toggleButton">
                    <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                        <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469" xmlns="http://www.w3.org/2000/svg"><path d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0"/></svg>
                    </span> 
                </span>
            </div>
            <div class="flex flex-col block answer bg-gray-200 w-full border-l-4 border-red-500">
                <img src="storage/images/image 4.png" alt="" class="mx-auto w-96 h-52 m-4">

                <p class="text-gray-600 m-4 ">On the flip side, there is also defensive security, which is the process of protecting an organization's network and computer systems by analyzing and securing
                    any potential digital threats; learn more in the digital forensics room.
                   </p>
                <p class="text-gray-600 m-4 ">In a defensive cyber role, you could be investigating infected computers or devices to understand how it was hacked, tracking down cybercriminals, or
                    monitoring infrastructure for malicious activity.</p>
            

                <div>
                    <div class="flex items-center justify-center mt-4">
                        <div class="mx-8 text-[#A20606] text w-[25vw]"><span class="text-xl">Answer the questions below</span></div>
                        <div class="border-t-2 border-gray-400 w-full"></div>
                    </div>
                    <div class="flex flex-col gap-4 mt-8">
                        <p class="ml-8 ">Which of the following options better represents the process where you simulate a hacker's actions to find vulnerabilities in a system?</p>
                        <ul class="flex flex-col gap-4 ml-16">
                            <il>Offensive Security</il>
                            <il>Defensive Security</il>
                        </ul>
                    </div>

                    <div class=" flex gap-12 mb-4 m-8">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-[#E9ECEF] border-2 border-gray-300 w-full " id="email" type="email" placeholder="Login to answer..">
                        <button type="button" class="py-2 px-4 max-w-md  flex justify-center items-center bg-white text-[#79BF00] border-2 border-[#79BF00] rounded-lg w-full">
                            Submit answer..
                          </button>
                    </div>
                </div>


            </div>

        </div>

        <div class="mb-4">
            
            <div class="flex items-center justify-between bg-[#223654] pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer ">
                <div class="flex gap-12">
                    <span class="text-[#ECBB0A]">Task 2</span>
                    <h1 class="text-white">  What is Offensive Security?</h1>
                </div>
                <span class="h-6 w-6 flex items-center justify-center text-teal-500 toggleButton">
                    <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                        <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469" xmlns="http://www.w3.org/2000/svg">
                            <path d="m437.332031 192h-160v-160c0-17.664062-14.335937-32-32-32h-21.332031c-17.664062 0-32 14.335938-32 32v160h-160c-17.664062 0-32 14.335938-32 32v21.332031c0 17.664063 14.335938 32 32 32h160v160c0 17.664063 14.335938 32 32 32h21.332031c17.664063 0 32-14.335937 32-32v-160h160c17.664063 0 32-14.335937 32-32v-21.332031c0-17.664062-14.335937-32-32-32zm0 0"/>      
                        </svg>
                    </span> 
                </span>
            </div>
            <div class="flex flex-col hidden answer bg-gray-200 w-full border-l-4 border-red-500">
                <img src="storage/images/image 3.png" alt="" class="mx-auto w-96 h-52 m-4">
                <p class="text-gray-600 m-4 ">In short, offensive security is the process of breaking into computer systems, exploiting software bugs, and finding loopholes in applications to gain
                    unauthorized access to them.</p>
                <p class="text-gray-600 m-4 ">To beat a hacker, you need to behave like a hacker, finding vulnerabilities and recommending patches before a cybercriminal does, as you'll do in this room!</p>

                <img src="storage/images/image 4.png" alt="" class="mx-auto w-96 h-52 m-4">

                <p class="text-gray-600 m-4 ">On the flip side, there is also defensive security, which is the process of protecting an organization's network and computer systems by analyzing and securing
                    any potential digital threats; learn more in the digital forensics room.
                   </p>
                <p class="text-gray-600 m-4 ">In a defensive cyber role, you could be investigating infected computers or devices to understand how it was hacked, tracking down cybercriminals, or
                    monitoring infrastructure for malicious activity.</p>
            

                <div>
                    <div class="flex items-center justify-center mt-4">
                        <div class="mx-8 text-[#A20606] text w-[25vw]"><span class="text-xl">Answer the questions below</span></div>
                        <div class="border-t-2 border-gray-400 w-full"></div>
                    </div>
                    <div class="flex flex-col gap-4 mt-8">
                        <p class="ml-8 ">Which of the following options better represents the process where you simulate a hacker's actions to find vulnerabilities in a system?</p>
                        <ul class="flex flex-col gap-4 ml-16">
                            <il>Offensive Security</il>
                            <il>Defensive Security</il>
                        </ul>
                    </div>

                    <div class=" flex gap-12 mb-4 m-8">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-[#E9ECEF] border-2 border-gray-300 w-full " id="email" type="email" placeholder="Login to answer..">
                        <button type="button" class="py-2 px-4 max-w-md  flex justify-center items-center bg-white text-[#79BF00] border-2 border-[#79BF00] rounded-lg w-full">
                            Submit answer..
                          </button>
                    </div>
                </div>


            </div>
        </div>

        <div class="mb-4">
            <div class="flex items-center justify-between bg-[#223654] pl-3 pr-2 py-3 w-full rounded text-gray-600 font-bold cursor-pointer ">
                <div class="flex gap-12">
                    <span class="text-[#ECBB0A]">Task 3</span>
                    <h1 class="text-white">  What is Offensive Security?</h1>
                </div>
                <span class="h-6 w-6 flex items-center justify-center text-teal-500 toggleButton">
                    <span class="h-6 w-6 flex items-center justify-center text-teal-500">
                        <svg class="w-3 h-3 fill-current" viewBox="0 -192 469.33333 469" xmlns="http://www.w3.org/2000/svg">
                            <path d="m437.332031 192h-160v-160c0-17.664062-14.335937-32-32-32h-21.332031c-17.664062 0-32 14.335938-32 32v160h-160c-17.664062 0-32 14.335938-32 32v21.332031c0 17.664063 14.335938 32 32 32h160v160c0 17.664063 14.335938 32 32 32h21.332031c17.664063 0 32-14.335937 32-32v-160h160c17.664063 0 32-14.335937 32-32v-21.332031c0-17.664062-14.335937-32-32-32zm0 0"/>     
                        </svg>           
                        </span> 
                </span>
            </div>
            <div class="flex flex-col hidden answer bg-gray-200 w-full border-l-4 border-red-500">
                <img src="storage/images/image 3.png" alt="" class="mx-auto w-96 h-52 m-4">
                <p class="text-gray-600 m-4 ">In short, offensive security is the process of breaking into computer systems, exploiting software bugs, and finding loopholes in applications to gain
                    unauthorized access to them.</p>
                <p class="text-gray-600 m-4 ">To beat a hacker, you need to behave like a hacker, finding vulnerabilities and recommending patches before a cybercriminal does, as you'll do in this room!</p>

                <img src="storage/images/image 4.png" alt="" class="mx-auto w-96 h-52 m-4">

                <p class="text-gray-600 m-4 ">On the flip side, there is also defensive security, which is the process of protecting an organization's network and computer systems by analyzing and securing
                    any potential digital threats; learn more in the digital forensics room.
                   </p>
                <p class="text-gray-600 m-4 ">In a defensive cyber role, you could be investigating infected computers or devices to understand how it was hacked, tracking down cybercriminals, or
                    monitoring infrastructure for malicious activity.</p>
            

                <div>
                    <div class="flex items-center justify-center mt-4">
                        <div class="mx-8 text-[#A20606] text w-[25vw]"><span class="text-xl">Answer the questions below</span></div>
                        <div class="border-t-2 border-gray-400 w-full"></div>
                    </div>
                    <div class="flex flex-col gap-4 mt-8">
                        <p class="ml-8 ">Which of the following options better represents the process where you simulate a hacker's actions to find vulnerabilities in a system?</p>
                        <ul class="flex flex-col gap-4 ml-16">
                            <il>Offensive Security</il>
                            <il>Defensive Security</il>
                        </ul>
                    </div>

                    <div class="flex gap-12 mb-4 m-8">
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black border-2 border-gray-300 w-full" id="email" type="email" placeholder="Login to answer..">
                        <button type="button" class="py-2 px-4 max-w-md flex justify-center items-center bg-white text-[#79BF00] border-2 border-[#79BF00] rounded-lg w-full">
                            Submit answer..
                        </button>
                    </div>
                    
                </div>


            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.toggleButton');
        
        toggleButtons.forEach(toggleButton => {
            toggleButton.addEventListener('click', function() {
                const answer = this.parentElement.nextElementSibling;
                answer.classList.toggle('hidden');
                const svgIcon = this.querySelector('svg'); 
                if (!answer.classList.contains('hidden')) {
                    svgIcon.setAttribute('viewBox', '0 -192 469 469');
                    svgIcon.innerHTML = '<path d="m437.332031.167969h-405.332031c-17.664062 0-32 14.335937-32 32v21.332031c0 17.664062 14.335938 32 32 32h405.332031c17.664063 0 32-14.335938 32-32v-21.332031c0-17.664063-14.335937-32-32-32zm0 0"/>';
                } else {
                    svgIcon.setAttribute('viewBox', '0 0 469.33333 469.33333');
                    svgIcon.innerHTML = '<path d="m437.332031 192h-160v-160c0-17.664062-14.335937-32-32-32h-21.332031c-17.664062 0-32 14.335938-32 32v160h-160c-17.664062 0-32 14.335938-32 32v21.332031c0 17.664063 14.335938 32 32 32h160v160c0 17.664063 14.335938 32 32 32h21.332031c17.664063 0 32-14.335937 32-32v-160h160c17.664063 0 32-14.335937 32-32v-21.332031c0-17.664062-14.335937-32-32-32zm0 0"/>';
                }
            });
        });
    });
</script>
    
@endsection
    