@extends('layouts.navbar')

@section('content')
    
<div class="container mx-auto h-screen bg-gray-200 ">
    <div class="flex flex-row justify-center relative">
        <!-- Middle -->
        <div class="md:w-[40vw] sm:w-600 h-screen bg-gray-200 text-black z-30 mt-16">

            <!-- links -->
                <div class=" pb-4 border-l border-r bg-white ">
                    <div class="flex flex-shrink-0 p-4 pb-0 mt-4">
                        <div class="w-12 flex items-top">
                            <img class="inline-block h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                alt="" />
                        </div>
                        <div class="w-full">
                            <input type="text"
                                class="text-black placeholder-gray-500 border-2 border-black p-2 bg-[#EFEFEF] w-full rounded-full"
                                name="title" id="title" value="" required
                                placeholder="what do you want to share?">
                        </div>
                    </div>
                    <div class="flex justify-around  items-center mt-4">
                        <a href="#" class="flex gap-2 ">
                            <img src="storage/images/image 7.png" alt="" class="w-6 h-6">
                            <h1>Ask</h1>
                        </a>

                        <a href="#" class="flex gap-2" onclick="togglePopup()">
                            <img src="storage/images/image 9.png" alt="" class="w-6 h-6">
                            <h1>Post</h1>
                        </a>

                        <div id="popup1"
                            class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
                            <div class="bg-white p-6 rounded-lg">
                                <!-- component -->
                                <div class="bg-white rounded-lg p-6  w-[50vw]  h-[55vh]">
                                    <h2 class="text-lg font-semibold mb-4">Post</h2>
                                    <p>post her ...</p>
                                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-md"
                                        onclick="togglePopup()">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /links -->

                <!-- User Post -->
                <div class="border max-w-screen-md bg-white mt-6  p-4">
                    <div class="flex items-center	justify-between">
                        <div class="gap-3.5	flex items-center ">
                            <img src="storage/images/v56_47.png"
                            class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
                            <div class="flex flex-col">
                                <b class="mb-2 capitalize">Mustapha Ouchin</b>
                                <time datetime="06-08-21" class="text-gray-400 text-xs">06 August at 09.15 PM
                                </time>
                            </div>
                        </div>
                        <div class="bg-gray-100	rounded-full h-3.5 flex	items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                width="34px" fill="#92929D">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="whitespace-pre-wrap mt-7 font-bold"># Info</div>
                    <div class="whitespace-pre-wrap mt-7 font-medium">How can I secure my WhatsApp?</div>
                    <div class="mt-4">
                        <h1 class="text-xl font-medium my-2">1-Enable Two-Step Verification:</h1>
                        <p>
                            Go to WhatsApp Settings > Account > Two-step verification.
                            Tap on "Enable" and follow the instructions to set up a six-digit PIN. This PIN will be
                            required
                            whenever you register your phone number with WhatsApp again.
                        </p>
                        <h1 class="text-xl font-medium my-2">2-Keep WhatsApp Updated:</h1>
                        <p>
                            
                            Ensure that you are using the latest version of WhatsApp. Developers frequently release
                            updates
                            to patch security vulnerabilities and improve overall security.
                        </p>
                        
                        <h1 class="text-xl font-medium my-2">3-Manage Privacy Settings:</h1>
                        <p>

                            Review and adjust your privacy settings in WhatsApp to control who can see your profile
                            information, last seen status, profile photo, and about information.
                            Limit who can add you to groups by adjusting group privacy settings.
                            
                        </p>

                    </div>


                    <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
                        <img src="storage/images/whatsapp.png"
                        class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">
                    </div>
                    <div class=" h-16 border-b  flex items-center justify-around	">
                        <div class="flex items-center	gap-3	">
                            <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Comment">
                                                    <g>
                                                        <g id="ic_comment-Component/icon/ic_comment">
                                                            <g id="Comments">
                                                                <polygon id="Path" points="0 0 24 0 24 25 0 25">
                                                                </polygon>
                                                                <g id="iconspace_Chat-3_25px"
                                                                    transform="translate(2.000000, 3.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm	">10 Comments</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                            </svg>
                            <div class="text-sm">5 Likes</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-636.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Share">
                                                    <g transform="translate(325.000000, 1.000000)">
                                                        <g id="ic_Share-Component/icon/ic_Share">
                                                            <g id="Share">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-24-Copy"
                                                                    transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) translate(1.000000, 1.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M4,0 C6.209139,0 8,1.790861 8,4 C8,4.1291298 7.99388117,4.25683047 7.98191762,4.38282788 L15.371607,7.98470389 C16.0745405,7.37145444 16.9938914,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 C16.9572434,15 16.0076801,14.6009919 15.2956607,13.9473263 L7.98384745,17.6380767 C7.99453877,17.7572882 8,17.8780063 8,18 C8,20.209139 6.209139,22 4,22 C1.790861,22 0,20.209139 0,18 C0,15.790861 1.790861,14 4,14 C5.37147453,14 6.58173814,14.690226 7.30236849,15.7422555 L14.2017356,12.2577203 C14.0708451,11.8622268 14,11.4393868 14,11 C14,10.5276126 14.0818865,10.0743509 14.2322392,9.65363512 L7.29274641,6.27172794 C6.57099412,7.31588608 5.36538874,8 4,8 C1.790861,8 0,6.209139 0,4 C0,1.790861 1.790861,0 4,0 Z M4,16 C2.8954305,16 2,16.8954305 2,18 C2,19.1045695 2.8954305,20 4,20 C5.1045695,20 6,19.1045695 6,18 C6,16.8954305 5.1045695,16 4,16 Z M18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 Z M4,2 C2.8954305,2 2,2.8954305 2,4 C2,5.1045695 2.8954305,6 4,6 C5.1045695,6 6,5.1045695 6,4 C6,2.8954305 5.1045695,2 4,2 Z"
                                                                        id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Share</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="17px" height="22px" viewBox="0 0 17 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Saved">
                                                    <g transform="translate(473.000000, 1.000000)">
                                                        <g id="ic_Saved-Component/icon/ic_Saved">
                                                            <g id="Saved">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-13-Copy"
                                                                    transform="translate(5.000000, 2.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                                        id="Rectangle-92"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Saved</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-4 mt-4">
                        <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            class="bg-yellow-500 rounded-full w-10 h-10 object-cover border">
                            <div class="w-full">
                                <input type="text "
                                class="text-black placeholder-gray-500 border-2 border-gray-300 p-2 bg-gray-100 w-full rounded-full"
                                name="title" id="title" value="" required
                                placeholder="Add a comment...">
                            </div>
                        <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">
                            Send
                        </button>
                    </div>
                </div>
                <!-- /Tweet -->

                <!-- N Tweet -->
                <div class="border max-w-screen-md bg-white mt-6  p-4">
                    <div class="flex items-center	justify-between">
                        <div class="gap-3.5	flex items-center ">
                            <img src="storage/images/logo.png"
                                class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
                                <div class="flex flex-col">
                                <b class="mb-2 capitalize">VigiNet</b>
                                <time datetime="06-08-21" class="text-gray-400 text-xs">06 August at 09.15 PM
                                </time>
                            </div>
                        </div>
                        <div class="bg-gray-100	rounded-full h-3.5 flex	items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                width="34px" fill="#92929D">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="whitespace-pre-wrap mt-7 font-bold"># News</div>
                    <div class="whitespace-pre-wrap mt-7 font-medium">Google Introduces Enhanced Real-Time URL
                        Protection
                        for Chrome Users</div>

                    <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
                        <img src="storage/images/Rectangle 20.png"
                            class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">
                        </div>
                    <div class="mt-4">
                        <p>Google on Thursday announced an enhanced version of Safe Browsing to provide real-time,
                            privacy-preserving URL protection and safeguard users from visiting potentially malicious
                            sites.
                            "The <span class="text-blue-700 ">Standard protection mode for Chrome </span>on desktop and
                            iOS
                            will check sites against
                            Google's server-side list of known bad sites in real-time," Google's Jonathan Li and Jasika
                            Bawa said.
                            "If we suspect a site poses a risk to you or your device, you'll see a warning with more
                            information. By checking sites in real time, we expect to block 25% more phishing attempts."
                            Up until now, the Chrome browser used a locally-stored list of known unsafe sites that's
                            updated every 30 to 60 minutes, and then leveraging a <span
                            class="text-blue-700"> hash-based
                            approach </span>to compare every
                            site visited against the database.
                    </div>



                    <div class=" h-16 border-b  flex items-center justify-around	">
                        <div class="flex items-center	gap-3	">
                            <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Comment">
                                                    <g>
                                                        <g id="ic_comment-Component/icon/ic_comment">
                                                            <g id="Comments">
                                                                <polygon id="Path" points="0 0 24 0 24 25 0 25">
                                                                </polygon>
                                                                <g id="iconspace_Chat-3_25px"
                                                                    transform="translate(2.000000, 3.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm	">10 Comments</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="text-sm">5 Likes</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-636.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Share">
                                                    <g transform="translate(325.000000, 1.000000)">
                                                        <g id="ic_Share-Component/icon/ic_Share">
                                                            <g id="Share">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-24-Copy"
                                                                    transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) translate(1.000000, 1.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M4,0 C6.209139,0 8,1.790861 8,4 C8,4.1291298 7.99388117,4.25683047 7.98191762,4.38282788 L15.371607,7.98470389 C16.0745405,7.37145444 16.9938914,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 C16.9572434,15 16.0076801,14.6009919 15.2956607,13.9473263 L7.98384745,17.6380767 C7.99453877,17.7572882 8,17.8780063 8,18 C8,20.209139 6.209139,22 4,22 C1.790861,22 0,20.209139 0,18 C0,15.790861 1.790861,14 4,14 C5.37147453,14 6.58173814,14.690226 7.30236849,15.7422555 L14.2017356,12.2577203 C14.0708451,11.8622268 14,11.4393868 14,11 C14,10.5276126 14.0818865,10.0743509 14.2322392,9.65363512 L7.29274641,6.27172794 C6.57099412,7.31588608 5.36538874,8 4,8 C1.790861,8 0,6.209139 0,4 C0,1.790861 1.790861,0 4,0 Z M4,16 C2.8954305,16 2,16.8954305 2,18 C2,19.1045695 2.8954305,20 4,20 C5.1045695,20 6,19.1045695 6,18 C6,16.8954305 5.1045695,16 4,16 Z M18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 Z M4,2 C2.8954305,2 2,2.8954305 2,4 C2,5.1045695 2.8954305,6 4,6 C5.1045695,6 6,5.1045695 6,4 C6,2.8954305 5.1045695,2 4,2 Z"
                                                                        id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Share</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="17px" height="22px" viewBox="0 0 17 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Saved">
                                                    <g transform="translate(473.000000, 1.000000)">
                                                        <g id="ic_Saved-Component/icon/ic_Saved">
                                                            <g id="Saved">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-13-Copy"
                                                                    transform="translate(5.000000, 2.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                                        id="Rectangle-92"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Saved</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-4 mt-4">
                        <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            class="bg-yellow-500 rounded-full w-10 h-10 object-cover border">
                        <div class="w-full">
                            <input type="text "
                                class="text-black placeholder-gray-500 border-2 border-gray-300 p-2 bg-gray-100 w-full rounded-full"
                                name="title" id="title" value="" required
                                placeholder="Add a comment...">
                            </div>
                        <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">
                            Send
                        </button>
                    </div>
                </div>
                <!-- /Tweet -->
                
                <!-- Tweet Q -->
                <div class="bg-white mt-4   cursor-pointer transition duration-350 ease-in-out pb-4 border-l border-r">
                    <div class="flex flex-shrink-0  pb-0 border-2">
                        <a href="#" class="flex-shrink-0 group block ">
                            <div class="flex items-top">
                                <div>
                                    <img class="inline-block h-10 w-10 m-2 " src="storage/images/Group 31.png"
                                    alt="" />
                                </div>
                                <div class="flex flex-col justify-center ">
                                    <h4 class="ml-4 text-2xl font-medium">Question for you</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="m-6">
                        <div class="mt-4 border-2 rounded-xl">
                            <p class="m-4">How can I enhance the security of my Gmail account to protect my personal
                                information and prevent unauthorized access?</p>
                            <button id="answerButton" class="flex gap-2 m-4 p-2 rounded-full border-2">
                                <img src="storage/images/Group 30.png" alt="" class="w-6 h-6">
                                <h6 class="mr-2">Answer</h6>
                            </button>
                        </div>
                    </div>
                    <div class="m-6">
                        <div class="mt-4 border-2 rounded-xl">
                            <p class="m-4">How can I enhance the security of my Gmail account to protect my personal
                                information and prevent unauthorized access?</p>
                            <button id="answerButton" class="flex gap-2 m-4 p-2 rounded-full border-2">
                                <img src="storage/images/Group 30.png" alt="" class="w-6 h-6">
                                <h6 class="mr-2">Answer</h6>
                            </button>
                        </div>
                        <!-- Popup container -->
                        <div id="answerPopup"
                            class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center ">
                            <!-- Popup content -->
                            <div class="bg-white rounded-lg p-6  w-[50vw]  h-[55vh]">
                                <h2 class="text-lg font-semibold mb-4">Answer</h2>
                                <p>Answer here...</p>
                                <!-- Close button -->
                                <button id="closePopup"
                                    class="mt-4 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg">Close</button>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /Tweet -->

                <!-- N Tweet -->
                <div class="border max-w-screen-md bg-white mt-6  p-4">
                    <div class="flex items-center	justify-between">
                        <div class="gap-3.5	flex items-center ">
                            <img src="https://images.unsplash.com/photo-1617077644557-64be144aa306?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                class="object-cover bg-yellow-500 rounded-full w-10 h-10" />
                            <div class="flex flex-col">
                                <b class="mb-2 capitalize">sofia müller</b>
                                <time datetime="06-08-21" class="text-gray-400 text-xs">06 August at 09.15 PM
                                </time>
                            </div>
                        </div>
                        <div class="bg-gray-100	rounded-full h-3.5 flex	items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                width="34px" fill="#92929D">
                                <path d="M0 0h24v24H0V0z" fill="none" />
                                <path
                                    d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                            </svg>
                        </div>
                    </div>
                    <div class="whitespace-pre-wrap mt-7 font-bold"># News</div>
                    <div class="whitespace-pre-wrap mt-7 font-medium">Google Introduces Enhanced Real-Time URL
                        Protection
                        for Chrome Users</div>
                    <div class="mt-4">
                        <p>Google on Thursday announced an enhanced version of Safe Browsing to provide real-time,
                            privacy-preserving URL protection and safeguard users from visiting potentially malicious
                            sites.
                            "The Standard protection mode for Chrome on desktop and iOS will check sites against
                            Google's server-side list of known bad sites in real-time," Google's Jonathan Li and Jasika
                            Bawa said.
                            "If we suspect a site poses a risk to you or your device, you'll see a warning with more
                            information. By checking sites in real time, we expect to block 25% more phishing attempts."
                            Up until now, the Chrome browser used a locally-stored list of known unsafe sites that's
                            updated every 30 to 60 minutes, and then leveraging a hash-based approach to compare every
                            site visited against the database.
                    </div>


                    <div class="mt-5 flex gap-2	 justify-center border-b pb-4 flex-wrap	">
                        <img src="storage/images/image 3.png"
                            class="bg-red-500 rounded-2xl w-1/3 object-cover h-96 flex-auto" alt="photo">
                    </div>
                    <div class=" h-16 border-b  flex items-center justify-around	">
                        <div class="flex items-center	gap-3	">
                            <svg width="20px" height="19px" viewBox="0 0 20 19" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-312.000000, -746.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Comment">
                                                    <g>
                                                        <g id="ic_comment-Component/icon/ic_comment">
                                                            <g id="Comments">
                                                                <polygon id="Path" points="0 0 24 0 24 25 0 25">
                                                                </polygon>
                                                                <g id="iconspace_Chat-3_25px"
                                                                    transform="translate(2.000000, 3.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M10.5139395,15.2840977 L6.06545155,18.6848361 C5.05870104,19.4544672 3.61004168,18.735539 3.60795568,17.4701239 L3.60413773,15.1540669 C1.53288019,14.6559967 0,12.7858138 0,10.5640427 L0,4.72005508 C0,2.11409332 2.10603901,0 4.70588235,0 L15.2941176,0 C17.893961,0 20,2.11409332 20,4.72005508 L20,10.5640427 C20,13.1700044 17.893961,15.2840977 15.2941176,15.2840977 L10.5139395,15.2840977 Z M5.60638935,16.5183044 L9.56815664,13.4896497 C9.74255213,13.3563295 9.955971,13.2840977 10.1754888,13.2840977 L15.2941176,13.2840977 C16.7876789,13.2840977 18,12.0671403 18,10.5640427 L18,4.72005508 C18,3.21695746 16.7876789,2 15.2941176,2 L4.70588235,2 C3.21232108,2 2,3.21695746 2,4.72005508 L2,10.5640427 C2,12.0388485 3.1690612,13.2429664 4.6301335,13.28306 C5.17089106,13.297899 5.60180952,13.7400748 5.60270128,14.2810352 L5.60638935,16.5183044 Z"
                                                                        id="Path"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm	">10 Comments</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="text-sm">5 Likes</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-636.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Share">
                                                    <g transform="translate(325.000000, 1.000000)">
                                                        <g id="ic_Share-Component/icon/ic_Share">
                                                            <g id="Share">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-24-Copy"
                                                                    transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) translate(1.000000, 1.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M4,0 C6.209139,0 8,1.790861 8,4 C8,4.1291298 7.99388117,4.25683047 7.98191762,4.38282788 L15.371607,7.98470389 C16.0745405,7.37145444 16.9938914,7 18,7 C20.209139,7 22,8.790861 22,11 C22,13.209139 20.209139,15 18,15 C16.9572434,15 16.0076801,14.6009919 15.2956607,13.9473263 L7.98384745,17.6380767 C7.99453877,17.7572882 8,17.8780063 8,18 C8,20.209139 6.209139,22 4,22 C1.790861,22 0,20.209139 0,18 C0,15.790861 1.790861,14 4,14 C5.37147453,14 6.58173814,14.690226 7.30236849,15.7422555 L14.2017356,12.2577203 C14.0708451,11.8622268 14,11.4393868 14,11 C14,10.5276126 14.0818865,10.0743509 14.2322392,9.65363512 L7.29274641,6.27172794 C6.57099412,7.31588608 5.36538874,8 4,8 C1.790861,8 0,6.209139 0,4 C0,1.790861 1.790861,0 4,0 Z M4,16 C2.8954305,16 2,16.8954305 2,18 C2,19.1045695 2.8954305,20 4,20 C5.1045695,20 6,19.1045695 6,18 C6,16.8954305 5.1045695,16 4,16 Z M18,9 C16.8954305,9 16,9.8954305 16,11 C16,12.1045695 16.8954305,13 18,13 C19.1045695,13 20,12.1045695 20,11 C20,9.8954305 19.1045695,9 18,9 Z M4,2 C2.8954305,2 2,2.8954305 2,4 C2,5.1045695 2.8954305,6 4,6 C5.1045695,6 6,5.1045695 6,4 C6,2.8954305 5.1045695,2 4,2 Z"
                                                                        id="Combined-Shape"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Share</div>
                        </div>
                        <div class="flex items-center	gap-3">
                            <svg width="17px" height="22px" viewBox="0 0 17 22" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="?-Social-Media" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Square_Timeline" transform="translate(-787.000000, -745.000000)">
                                        <g id="Post-1" transform="translate(280.000000, 227.000000)">
                                            <g id="Post-Action" transform="translate(0.000000, 495.000000)">
                                                <g transform="translate(30.000000, 21.000000)" id="Saved">
                                                    <g transform="translate(473.000000, 1.000000)">
                                                        <g id="ic_Saved-Component/icon/ic_Saved">
                                                            <g id="Saved">
                                                                <circle id="Oval" cx="12" cy="12"
                                                                    r="12"></circle>
                                                                <g id="Group-13-Copy"
                                                                    transform="translate(5.000000, 2.000000)"
                                                                    fill="#92929D">
                                                                    <path
                                                                        d="M2.85714286,-0.952380952 L12.1428571,-0.952380952 C14.246799,-0.952380952 15.952381,0.753200953 15.952381,2.85714286 L15.952381,18.2119141 C15.952381,19.263885 15.09959,20.116746 14.047619,20.116746 C13.6150601,20.116746 13.1953831,19.9694461 12.8576286,19.6992071 L7.5,15.4125421 L2.14237143,19.6992071 C1.32096217,20.3564207 0.122301512,20.2233138 -0.534912082,19.4019046 C-0.805151112,19.0641501 -0.952380952,18.644473 -0.952380952,18.2119141 L-0.952380952,2.85714286 C-0.952380952,0.753200953 0.753200953,-0.952380952 2.85714286,-0.952380952 Z M2.85714286,0.952380952 C1.80517191,0.952380952 0.952380952,1.80517191 0.952380952,2.85714286 L0.952380952,18.2119141 L6.31000952,13.9252491 C7.00569973,13.3686239 7.99430027,13.3686239 8.68999048,13.9252491 L14.047619,18.2119141 L14.047619,2.85714286 C14.047619,1.80517191 13.1948281,0.952380952 12.1428571,0.952380952 L2.85714286,0.952380952 Z"
                                                                        id="Rectangle-92"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <div class="text-sm">Saved</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-4 mt-4">
                        <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                            class="bg-yellow-500 rounded-full w-10 h-10 object-cover border">
                        <div class="w-full">
                            <input type="text "
                                class="text-black placeholder-gray-500 border-2 border-gray-300 p-2 bg-gray-100 w-full rounded-full"
                                name="title" id="title" value="" required
                                placeholder="Add a comment...">
                        </div>
                        <button class="ml-4 bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full">
                            Send
                        </button>
                    </div>
                </div>
                <!-- /Tweet -->

                <!-- Spinner -->
                <div class="flex items-center justify-center p-4 border-b border-l border-2 border-gray-200 bg-white">

                </div>
                <!-- /Spinner -->

            </div>
            <!-- /Middle -->

        </div>
    </div>

    <script>
        function togglePopup() {
            const popup = document.getElementById('popup1');
            popup.classList.toggle('hidden');
        }
    </script>

    <script>
        // Function to show the popup
        function showPopup() {
            document.getElementById('answerPopup').classList.remove('hidden');
        }

        // Function to hide the popup
        function hidePopup() {
            document.getElementById('answerPopup').classList.add('hidden');
        }

        // Event listener for the "Answer" button
        document.getElementById('answerButton').addEventListener('click', function() {
            showPopup();
        });

        // Event listener for the "Close" button
        document.getElementById('closePopup').addEventListener('click', function() {
            hidePopup();
        });
    </script>


    <script>
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
    </script>

@endsection