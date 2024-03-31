<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="antialiased ">

    <section class="bg-[#161E2D] h-36 w-full flex  items-center gap-4 ">

        <div class="ml-52">
            <a href="/"><img src="storage/images/Vector.png" alt=""></a>
        </div>
        <div>
            <h1 class="text-white font-bold text-3xl">Sign Up </h1>
            <span class="text-gray-400">welcome  ! </span>
        </div>

    </section>

    <section>
        <div class="m-16">
            <form method="POST" action="{{ route('register.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" id="username" name="username" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                    <select id="role" name="role" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500" required>
                        <option value="">Select Role</option>
                        <option value="Client">Client</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>
                <div id="client-fields" class="hidden">
                    <div class="mb-4">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" id="address" name="address" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500">
                    </div>
                </div>
                <div id="expert-fields" class="hidden">
                    <div class="mb-4">
                        <label for="certificate" class="block text-sm font-medium text-gray-700">Certificate</label>
                        <input type="text" id="certificate" name="certificate" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="experience" class="block text-sm font-medium text-gray-700">Experience</label>
                        <input type="text" id="experience" name="experience" class="mt-1 block w-full h-10 border-2 rounded-md shadow-sm hover:border-blue-500">
                    </div>
                </div>
                <button type="submit" class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 mt-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                    Sign Up
                </button>
            </form>
        </div>

        <div class="flex items-center justify-center mt-4">
            <div class="border-t-2 border-gray-300 w-full"></div>
            <div class="mx-4 text-gray-400 text"><span class="text-xl">OR</span></div>
            <div class="border-t-2 border-gray-300 w-full"></div>
        </div>

        <div class=" flex gap-12 mx-16 my-8">
            <a href="{{ route('google.redirect') }}">
                <button class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md max-w-xs px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-0.5 0 48 48" version="1.1">
                        <!-- SVG content here -->
                    </svg>
                    <span>Continue with Google</span>
                </button>
            </a>

            <button
                class="flex items-center bg-white border border-gray-300 rounded-lg shadow-md max-w-xs px-6 py-2 text-sm font-medium text-gray-800 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 48 48" version="1.1">
                    <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0">
                            <path
                                d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z"
                                id="Facebook">

                            </path>
                        </g>
                    </g>
                </svg>

                <span>Continue with Facebook</span>
            </button>
        </div>

        <div class="flex justify-between m-16">
            <h3 class="text-center">Already have an account?<span class="text-blue-400 "><a href="#"> Log in
        </div>
    </section>

    <script>
        const roleSelect = document.getElementById('role');
        const clientFields = document.getElementById('client-fields');
        const expertFields = document.getElementById('expert-fields');
    
        roleSelect.addEventListener('change', () => {
            if (roleSelect.value === 'Client') {
                clientFields.classList.remove('hidden');
                expertFields.classList.add('hidden');
            } else if (roleSelect.value === 'Expert') {
                clientFields.classList.add('hidden');
                expertFields.classList.remove('hidden');
            } else {
                clientFields.classList.add('hidden');
                expertFields.classList.add('hidden');
            }
        });
    </script>