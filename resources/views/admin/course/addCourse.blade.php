@extends('layouts.sidebar')

@section('content')
    <div class="m-8 bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Course</h2>
        <form id="courseForm" name="course-form" method="POST" action="{{ route('addCourse.store') }}"
              enctype="multipart/form-data">
            @csrf
            <!-- Lesson Title -->
            <div class="mb-4">
                <label for="lessonTitle" class="block font-medium text-gray-700">Lesson Title</label>
                <input type="text" name="title" id="lessonTitle"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                       required>
            </div>

            <!-- Lesson Description -->
            <div class="mb-4">
                <label for="lessonDesc" class="block font-medium text-gray-700">Lesson Description</label>
                <textarea name="description" id="lessonDesc"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                          rows="3" required></textarea>
            </div>

            <!-- Category Selection -->
            <div class="mb-4">
                <label for="category" class="block font-medium text-gray-700">Category</label>
                <select name="category_id" id="category"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="" disabled selected>Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Lesson Image Upload -->
            <div class="mb-4">
                <label for="lessonImage" class="block font-medium text-gray-700">Lesson Image</label>
                <input type="file" name="image" id="lessonImage"
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>

            <!-- Add Task Button -->
            <button type="button" id="addTaskButton"
                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                Task
            </button>

            <!-- Task Container -->
            <div id="taskContainer" class="mb-8">
                <!-- Task forms will be added here dynamically -->
            </div>

            <!-- Save Lesson Button -->
            <button type="submit" id="saveLesson"
                    class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Save
                Lesson
            </button>
        </form>
    </div>

    <script>
        // document.addEventListener('DOMContentLoaded', function () {
            let taskCount = 0;

            function addTaskForm() {
                const taskContainer = document.getElementById('taskContainer');
                const taskForm = document.createElement('form');
                taskForm.classList.add('mb-4', 'bg-gray-100', 'p-4', 'rounded-md', 'addedForm');

                taskCount++;

                taskForm.innerHTML = `
                    <div class="flex items-center mb-2">
                        <h3 class="text-lg font-semibold mr-2">Task ${taskCount}:</h3>
                        <button type="button" class="add-question-btn inline-flex justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2" onclick="addQuestion(${taskCount})">Add Question</button>
                    </div>
                    <div class="mb-2">
                        <label for="taskTitle${taskCount}" class="block font-medium text-gray-700">Task Title</label>
                        <input type="text" id="taskTitle${taskCount}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="taskContent${taskCount}" class="block font-medium text-gray-700">Task Content</label>
                        <textarea id="taskContent${taskCount}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" required></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="taskImage${taskCount}" class="block font-medium text-gray-700">Task Image</label>
                        <input type="file" id="taskImage${taskCount}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div id="questionContainer${taskCount}"></div>
                    <button type="button" class="remove-task-btn inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" onclick="removeTaskForm(this);">Remove Task</button>
                `;

                taskContainer.appendChild(taskForm);
                document.getElementById('saveLesson').disabled = false;
            }

            function addQuestion(taskIndex) {
                const questionContainer = document.getElementById(`questionContainer${taskIndex}`);
                const questionForm = document.createElement('div');
                questionForm.classList.add('mb-4', 'bg-gray-200', 'p-4', 'rounded-md');

                questionForm.innerHTML = `
                    <div class="mb-2">
                        <label for="questionText" class="block font-medium text-gray-700">Question</label>
                        <input type="text" id="questionText" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="choice1" class="block font-medium text-gray-700">Choice 1</label>
                        <input type="text" id="choice1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="choice2" class="block font-medium text-gray-700">Choice 2</label>
                        <input type="text" id="choice2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="choice3" class="block font-medium text-gray-700">Choice 3</label>
                        <input type="text" id="choice3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="choice4" class="block font-medium text-gray-700">Choice 4</label>
                        <input type="text" id="choice4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                    </div>
                    <div class="mb-2">
                        <label for="correctChoice" class="block font-medium text-gray-700">Correct Choice</label>
                        <select id="correctChoice" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                            <option value="">Select the correct choice</option>
                            <option value="1">Choice 1</option>
                            <option value="2">Choice 2</option>
                            <option value="3">Choice 3</option>
                            <option value="4">Choice 4</option>
                        </select>
                    </div>
                    <button class="remove-question-btn inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2" onclick="removeQuestionForm(this)">Remove Question</button>
                `;

                questionContainer.appendChild(questionForm);
            }

            function removeTaskForm(taskForm) {
                const taskContainer = taskForm.closest('form');
                taskContainer.remove();

                // Disable the "Save Lesson" button if there are no tasks
                if (taskContainer.children.length === 0) {
                    document.getElementById('saveLesson').disabled = true;
                }
            }

            document.getElementById('addTaskButton').addEventListener('click', addTaskForm);
        // });
    </script>
@endsection
