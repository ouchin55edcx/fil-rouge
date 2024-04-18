@extends('layouts.sidebar')

@section('content')
    <div id="multi-step-form" class="max-w-3xl mx-auto">
        <div class="mb-8">
            <ul class="flex justify-between items-center">
                <li class="step-item">
                    <div class="step-counter">1</div>
                    <span class="step-label">Course Details</span>
                </li>
                <li class="step-item">
                    <div class="step-counter">2</div>
                    <span class="step-label">Task Details</span>
                </li>
            </ul>
            <div class="progress-bar">
                <div class="progress" style="width: 0%;"></div>
            </div>
        </div>

        <!-- Step 1: Course Details -->
        <div id="step-1" class="form-step">
            <h2 class="text-2xl font-bold mb-4">Course Details</h2>
            // Form
            <form method="POST" action="{{ route('admin.course.addCourse.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="course-title" class="block font-bold mb-2">Title:</label>
                    <input type="text" name="title" id="course-title" class="border border-gray-400 px-3 py-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label for="course-image" class="block font-bold mb-2">Image:</label>
                    <input type="file" name="image" id="course-image" accept="image/*" class="border border-gray-400 px-3 py-2 w-full" required>
                </div>

                <div class="mb-4">
                    <label for="course-category" class="block font-bold mb-2">Category:</label>
                    <select name="category" id="course-category" class="border border-gray-400 px-3 py-2 w-full" required>
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="course-description" class="block font-bold mb-2">Description:</label>
                    <textarea name="description" id="course-description" class="border border-gray-400 px-3 py-2 w-full" required></textarea>
                </div>
                <button type="submit" id="next-btn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Next</button>
            </form>
        </div>

        <!-- Step 2: Task Details -->
        <!-- Step 2: Task Details -->
{{--        <div id="step-2" class="form-step hidden">--}}
{{--            <h2 class="text-2xl font-bold mb-4">Task Details</h2>--}}
{{--            <form method="POST" action="{{ route('admin.course.addCourse.store') }}" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div id="task-forms">--}}
{{--                    <!-- Task forms will be added here dynamically -->--}}
{{--                </div>--}}
{{--                <button type="button" id="add-task-form" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mb-4">Add Task</button>--}}
{{--                <div class="flex justify-between">--}}
{{--                    <button type="button" id="prev-btn" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Previous</button>--}}
{{--                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <!-- Display validation errors -->--}}
{{--            @if ($errors->any())--}}
{{--                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mt-4">--}}
{{--                    <strong>Whoops!</strong> There were some problems with your input.--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <script>--}}
{{--        const formSteps = document.querySelectorAll('.form-step');--}}
{{--        const nextBtn = document.getElementById('next-btn');--}}
{{--        const prevBtn = document.getElementById('prev-btn');--}}
{{--        const progressBar = document.querySelector('.progress');--}}
{{--        const stepItems = document.querySelectorAll('.step-item');--}}
{{--        const taskFormsContainer = document.getElementById('task-forms');--}}
{{--        const addTaskFormBtn = document.getElementById('add-task-form');--}}
{{--        let currentStep = 0;--}}

{{--        // Function to create a new task form--}}
{{--        function createTaskForm() {--}}
{{--            const taskForm = document.createElement('div');--}}
{{--            taskForm.classList.add('mb-4');--}}

{{--            taskForm.innerHTML = `--}}
{{--<form class="bg-gray-300 p-4 rounded-lg" >--}}
{{--  <div class="">--}}
{{--    <label for="task-title" class="block font-bold mb-2">Title:</label>--}}
{{--    <input type="text" id="task-title" class="task-title border border-gray-400 px-3 py-2 w-full" required>--}}
{{--  </div>--}}
{{--  <div class="mb-4">--}}
{{--    <label for="task-content" class="block font-bold mb-2">Content:</label>--}}
{{--    <textarea id="task-content" class="task-content border border-gray-400 px-3 py-2 w-full" required></textarea>--}}
{{--  </div>--}}
{{--  <div class="mb-4">--}}
{{--    <label for="task-question" class="block font-bold mb-2">Question:</label>--}}
{{--    <input type="text" id="task-question" class="task-question border border-gray-400 px-3 py-2 w-full" required>--}}
{{--  </div>--}}
{{--  <div class="mb-4">--}}
{{--    <label class="block font-bold mb-2">Options:</label>--}}
{{--    <div class="task-options flex flex-wrap mb-2">--}}
{{--      <input type="text" class="option-input border border-gray-400 px-3 py-2 mr-2 mb-2" required>--}}
{{--    </div>--}}
{{--    <button type="button" class="add-option bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Option</button>--}}
{{--  </div>--}}
{{--  <div class="mb-4">--}}
{{--    <label for="correct-choice" class="block font-bold mb-2">Correct Choice:</label>--}}
{{--    <input type="text" id="correct-choice" class="correct-choice border border-gray-400 px-3 py-2 w-full" required>--}}
{{--  </div>--}}
{{--  <button type="button" class="remove-task bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Remove Task</button>--}}
{{--</form>`;--}}

{{--            taskFormsContainer.appendChild(taskForm);--}}

{{--            // Add event listener for the Add Option button--}}
{{--            const addOptionBtn = taskForm.querySelector('.add-option');--}}
{{--            addOptionBtn.addEventListener('click', () => {--}}
{{--                const optionsContainer = taskForm.querySelector('.task-options');--}}
{{--                const newOption = document.createElement('input');--}}
{{--                newOption.type = 'text';--}}
{{--                newOption.className = 'option-input border border-gray-400 px-3 py-2 mr-2 mb-2';--}}
{{--                newOption.required = true;--}}
{{--                optionsContainer.appendChild(newOption);--}}
{{--            });--}}

{{--            // Add event listener for the Remove Task button--}}
{{--            const removeTaskBtn = taskForm.querySelector('.remove-task');--}}
{{--            removeTaskBtn.addEventListener('click', () => {--}}
{{--                taskFormsContainer.removeChild(taskForm);--}}
{{--            });--}}
{{--        }--}}

{{--        // Function to show the current step and hide the others--}}
{{--        function showStep(n) {--}}
{{--            formSteps.forEach((step, index) => {--}}
{{--                if (index === n) {--}}
{{--                    step.classList.remove('hidden');--}}
{{--                    stepItems[index].classList.add('active');--}}
{{--                } else {--}}
{{--                    step.classList.add('hidden');--}}
{{--                    stepItems[index].classList.remove('active');--}}
{{--                }--}}
{{--            });--}}
{{--            currentStep = n;--}}
{{--            updateProgressBar();--}}
{{--        }--}}

{{--        // Function to update the progress bar--}}
{{--        function updateProgressBar() {--}}
{{--            const progress = ((currentStep + 1) / formSteps.length) * 100;--}}
{{--            progressBar.style.width = `${progress}%`;--}}
{{--        }--}}

{{--        // Event listener for the Next button--}}
{{--        nextBtn.addEventListener('click', () => {--}}
{{--            showStep(currentStep + 1);--}}
{{--        });--}}

{{--        // Event listener for the Previous button--}}
{{--        prevBtn.addEventListener('click', () => {--}}
{{--            showStep(currentStep - 1);--}}
{{--        });--}}

{{--        // Event listener for the Add Task button--}}
{{--        addTaskFormBtn.addEventListener('click', createTaskForm);--}}

{{--        // Show the first step initially--}}
{{--        showStep(0);--}}
{{--    </script>--}}

@endsection
