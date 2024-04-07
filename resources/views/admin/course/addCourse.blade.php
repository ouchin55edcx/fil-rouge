@extends('layouts.sidebar')

@section('content')
    <div class="m-8  bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Course</h2>
        <div class="mb-4">
            <label for="lessonTitle" class="block font-medium text-gray-700">Course Title</label>
            <input type="text" id="lessonTitle"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                required>
        </div>
        <div class="mb-4">
            <label for="lessonDesc" class="block font-medium text-gray-700">Course Description</label>
            <textarea id="lessonDesc"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                rows="3" required></textarea>
        </div>
        <div class="mb-4">
            <label for="category" class="block font-medium text-gray-700">Category</label>
            <select id="category"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <!-- Add options for categories here -->
            </select>
        </div>
        <div class="mb-4 flex items-center justify-between">
            <div>
                <label for="courseImage" class="block font-medium text-gray-700">Course Image</label>
                <input type="file" id="courseImage"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            </div>
            <button id="addTaskButton"
                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add
                Task</button>
        </div>

        <div id="taskContainer" class="mb-8">
            <!-- Task forms will be added here dynamically -->
        </div>

        <button id="saveCourse"
            class="inline-flex justify-center rounded-md border border-transparent bg-green-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
            disabled>Save Course</button>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let taskCount = 0;
    
            // Function to add a task form
            function addTaskForm() {
                const taskContainer = document.getElementById('taskContainer');
                const taskForm = document.createElement('div');
                taskForm.classList.add('mb-4', 'bg-gray-100', 'p-4', 'rounded-md');
    
                taskCount++;
    
                taskForm.innerHTML = `
        <div class="flex items-center mb-2">
          <h3 class="text-lg font-semibold mr-2">Task ${taskCount}:</h3>
          <button class="add-question-btn inline-flex justify-center rounded-md border border-transparent bg-purple-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">Add Question</button>
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
        <button class="remove-task-btn inline-flex justify-center rounded-md border border-transparent bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">Remove Task</button>
        `;
    
                taskContainer.appendChild(taskForm);
    
                // Enable the "Save Course" button if there is at least one task
                const saveCourseButton = document.getElementById('saveCourse');
                saveCourseButton.disabled = false; // Enable button (assuming there's a "Save Course" button)
    
                // Add event listener for the "Add Question" button inside the task form
                const addQuestionButton = taskForm.querySelector('.add-question-btn');
                addQuestionButton.addEventListener('click', function() {
                    addQuestionForm(taskCount);
                });
    
                // Add event listener for the "Remove Task" button
                const removeTaskButton = taskForm.querySelector('.remove-task-btn');
                removeTaskButton.addEventListener('click', function() {
                    removeTaskForm(taskForm);
                });
            }
    
            // Function to add a question form
            function addQuestionForm(taskIndex) {
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
    
                // Add event listener for the "Remove Question" button
                const removeQuestionButton = questionForm.querySelector('.remove-question-btn');
                removeQuestionButton.addEventListener('click', function() {
                    removeQuestionForm(questionForm);
                });
            }
    
            // Function to remove a question form
            function removeQuestionForm(questionForm) {
                const questionContainer = questionForm.parentNode;
                questionContainer.removeChild(questionForm);
            }
    
            // Function to remove a task form
            function removeTaskForm(taskForm) {
                const taskContainer = taskForm.parentNode;
                taskContainer.removeChild(taskForm);
    
                // Disable the "Save Course" button if there are no tasks
                const saveCourseButton = document.getElementById('saveCourse');
                if (taskContainer.children.length === 0) {
                    saveCourseButton.disabled = true;
                }
            }
    
            // Add event listener for the initial "Add Task" button
            const addTaskButton = document.getElementById('addTaskButton');
            addTaskButton.addEventListener('click', addTaskForm);
        });
    </script>
    
@endsection
