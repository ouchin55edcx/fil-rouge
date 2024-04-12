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

                        <!-- First Trigger Link -->
                        <a href="#" class="flex gap-2" onclick="togglePopup('popup1')">
                            <img src="storage/images/image7.png" alt="" class="w-6 h-6">
                            <h1>Post</h1>
                        </a>

                        <!-- Second Trigger Link -->
                        <a href="#" class="flex gap-2" onclick="togglePopup('popup2')">
                            <img src="storage/images/image9.png" alt="" class="w-6 h-6">
                            <h1>Ask</h1>
                        </a>

                        <a href="{{ route('asks.index') }}">View Answers</a>

                        <!-- First Popup Container -->
                        <div id="popup1" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                            <div class="bg-white p-4 rounded-lg w-[50vw]">
                                <div class="heading text-center font-bold text-xl mb-4 text-gray-800">New Post</div>
                                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')

                                    <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::User()->id}}">
                                    <input class="title bg-gray-100 border border-gray-300 p-2 mb-2 outline-none w-full" spellcheck="false" placeholder="Title" type="text" name="title">
                                    <textarea class="description bg-gray-100 sec p-2 h-40 border border-gray-300 outline-none w-full mb-4" spellcheck="false" placeholder="Describe everything about this post here" name="content"></textarea>
                                    <input type="hidden" value="">

                                    <!-- Icons -->
                                    <input type="file" name="image[]" multiple>

                                    <   !-- Buttons -->
                                    <div class="buttons flex">
                                        <button type="button" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto" onclick="togglePopup('popup1')">Cancel</button>
                                        <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Second Popup Container -->
                        <div id="popup2" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
                            <div class="bg-white p-4 rounded-lg w-[50vw]">
                                <div class="heading text-center font-bold text-xl mb-4 text-gray-800">Ask Question</div>
                                <form action="{{ route('asks.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <input type="hidden" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}" name="user_id">
                                    <input class="title bg-gray-100 border border-gray-300 p-2 mb-2 outline-none w-full" spellcheck="false" placeholder="Start your question with 'What', 'How', 'Why', etc ..." type="text" name="content">
                                    <!-- Buttons -->
                                    <div class="buttons flex">
                                        <button type="button" class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto" onclick="togglePopup('popup2')">Cancel</button>
                                        <button type="submit" class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /links -->


                <!-- Tweet Q -->
                <div class="bg-white mt-4 cursor-pointer transition duration-350 ease-in-out pb-4 border-l border-r">
                    <div class="flex flex-shrink-0 pb-0 border-2">
                        <a href="#" class="flex-shrink-0 group block">
                            <div class="flex items-top">
                                <div>
                                    <img class="inline-block h-10 w-10 m-2" src="storage/images/Group 31.png" alt="" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h4 class="ml-4 text-2xl font-medium">Question for you</h4>
                                </div>
                            </div>
                        </a>
                    </div>

                    @foreach($asks as $ask)
                        <div class="m-6">
                            <div class="mt-4 border-2 rounded-xl">
                                <p class="m-4">{{ $ask->content }}</p>
                                <button class="answerButton flex gap-2 m-4 p-2 rounded-full border-2 focus:outline-none"
                                        data-ask-id="{{ $ask->id }}">
                                    <img src="storage/images/Group 30.png" alt="" class="w-6 h-6">
                                    <h6 class="mr-2">Answer</h6>
                                </button>
                                <a href="{{ route('askanswers.index', ['ask_id' => $ask->id]) }}" class="underline text-blue-500 text-center">34 answers</a>
                            </div>
                        </div>
                    @endforeach

                    <!-- Popup container -->
                    <div id="answerPopup" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center">
                        <!-- Popup content -->
                        <div class="bg-white rounded-lg p-6 w-[50vw] h-[55vh]">
                            <h2 class="text-lg font-semibold mb-4">Answer</h2>
                            <!-- Answer form -->
                            <form id="answerForm" action="{{ route('askanswers.store') }}" method="POST">
                                @csrf
                                <input type="hidden" id="askIdInput" name="ask_id" value="">
                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <textarea name="content" class="w-full h-32 bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"
                                          placeholder="Write your answer here..." required></textarea>
                                <!-- Submit button -->
                                <button type="submit"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Submit</button>
                            </form>
                            <!-- Close button -->
                            <button id="closePopup" class="mt-4 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg">Close</button>
                        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const answerButtons = document.querySelectorAll('.answerButton');
            const answerPopup = document.getElementById('answerPopup');
            const askIdInput = document.getElementById('askIdInput');
            const closePopupButton = document.getElementById('closePopup');

            // Show popup when Answer button is clicked
            answerButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const askId = this.dataset.askId;
                    askIdInput.value = askId; // Set the ask_id input value
                    answerPopup.classList.remove('hidden');
                });
            });

            // Hide popup when Close button is clicked
            closePopupButton.addEventListener('click', function() {
                answerPopup.classList.add('hidden');
            });
        });
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

@endsection
