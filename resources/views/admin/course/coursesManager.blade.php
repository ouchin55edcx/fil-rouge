@extends('layouts.sidebar')

@section('content')
<div class="w-full px-10 py-6 mx-auto loopple-min-height-78vh text-slate-500 ">
    <div class="flex flex-wrap -mx-3 mb-5 removable">
        <div class="w-full max-w-full px-3">
            <div class="relative flex flex-col break-words min-w-0 bg-clip-border rounded-xl bg-neutral-900 mb-5">
                <!-- card body  -->
 
            </div>
            <h3 class="font-bold mb-4 text-2xl">Courses</h3>
            <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-yellow-500 bg-light/30 mb-5">
                <!-- card header -->
                <div class="px-9 pt-5 flex justify-between items-stretch flex-wrap min-h-[70px] pb-0 bg-transparent">
                    <h3 class="flex flex-col items-start justify-center m-2 ml-0 font-medium text-xl/tight text-dark">
                        <span class="mr-3 font-semibold text-dark">All Courses</span>
                        <span class="mt-1 font-medium text-secondary-dark text-lg/normal">Check all courses available</span>
                    </h3>
                    <div class="relative flex flex-wrap items-center my-2">
                        <a href="javascript:void(0)" class="inline-block text-[.925rem] font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-150 ease-in-out text-light-inverse bg-light-dark border-light shadow-none border-0 py-2 px-5 hover:bg-secondary active:bg-light focus:bg-light">See other courses</a>
                    </div>
                </div>
                <!-- end card header -->
                <!-- card body  -->
                <div class="flex-auto block py-8 pt-6 px-9 bg-gray-300 rounded-xl">
                    <div class="overflow-x-auto">
                        <table class="w-full my-0 align-middle text-dark border-neutral-200">
                            <thead class="align-bottom">
                                <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                    <th class="pb-3 text-start min-w-[175px]">COURSE</th>
                                    <th class="pb-3 text-end min-w-[100px]">OWNER</th>
                                    <th class="pb-3 text-end min-w-[100px]">DURATION</th>
                                    <th class="pb-3 pr-12 text-end min-w-[175px]">STATUS</th>
                                    <th class="pb-3 pr-12 text-end min-w-[100px]">DEADLINE</th>
                                    <th class="pb-3 text-end min-w-[50px]">DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-49-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div>
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Social Media API </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="font-semibold text-light-inverse text-md/normal">Olivia Cambell</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>1h 6min</span>
                                    </td>
                                    <td class="p-3 pr-12 text-end">
                                        <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> In Progress </span>
                                    </td>
                                    <td class="pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">2023-08-23</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                            <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-40-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div>
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Geolocation App </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="font-semibold text-light-inverse text-md/normal">Luca Micloe</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none rounded-lg text-success bg-success-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>55min</span>
                                    </td>
                                    <td class="p-3 pr-12 text-end">
                                        <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-light-inverse rounded-lg text-success bg-success-light">Done
                                        </span>
                                    </td>
                                    <td class="pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">2024-04-11</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                            <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-39-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div>
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> iOS Login <span class="text-sm">(Morra)</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="font-semibold text-light-inverse text-md/normal">Bianca Winson</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>2h 18min</span>
                                    </td>
                                    <td class="p-3 pr-12 text-end">
                                        <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-primary bg-primary-light rounded-lg"> In Progress </span>
                                    </td>
                                    <td class="pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">2024-02-10</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                            <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-47-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div>
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Axios Menu </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="font-semibold text-light-inverse text-md/normal">Roberto Alliton</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>45min</span>
                                    </td>
                                    <td class="p-3 pr-12 text-end">
                                        <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-success bg-success-light rounded-lg"> Done </span>
                                    </td>
                                    <td class="pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">2023-05-31</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                            <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="border-b border-dashed last:border-b-0">
                                    <td class="p-3 pl-0">
                                        <div class="flex items-center">
                                            <div class="relative inline-block shrink-0 rounded-2xl me-3">
                                                <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-48-new.jpg" class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl" alt="">
                                            </div>
                                            <div class="flex flex-col justify-start">
                                                <a href="javascript:void(0)" class="mb-1 font-semibold transition-colors duration-200 ease-in-out text-lg/normal text-secondary-inverse hover:text-primary"> Resto Aperto </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="font-semibold text-light-inverse text-md/normal">Michael Kenny</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none rounded-lg text-success bg-success-light">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>1h 12min</span>
                                    </td>
                                    <td class="p-3 pr-12 text-end">
                                        <span class="text-center align-baseline inline-flex px-4 py-3 mr-auto items-center font-semibold text-[.95rem] leading-none text-warning bg-warning-light rounded-lg"> Postponed </span>
                                    </td>
                                    <td class="pr-0 text-start">
                                        <span class="font-semibold text-light-inverse text-md/normal">2023-05-15</span>
                                    </td>
                                    <td class="p-3 pr-0 text-end">
                                        <button class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                            <span class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
  

@endsection
