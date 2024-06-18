<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .hidden {
            display: none;
        }

        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="h-screen flex">
    <div class="w-1/2 flex flex-col items-center justify-center p-10">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Welcome to PMB Registration</h2>
            <p class="text-gray-800 mb-6">Join us and shape your future with our excellent programs.</p>
            <img src="../../assets/mhs.jpg" alt="Campus" class="w-full mx-auto rounded-xl">
        </div>
    </div>

    <div class="w-1/2 bg-white flex flex-col items-center justify-center p-10">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Register</h2>
        <p class="text-gray-600 mb-6">Please complete to finish your Registration.</p>
        <form id="registrationForm" action="Formsql.php" method="post" class="w-full max-w-md">
            <div id="section1">
                <div class="flex justify-between gap-2">
                    <div class="mb-6">
                        <label for="first_name" class="block text-gray-600">First Name</label>
                        <input type="text" id="first_name" name="first_name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="block text-gray-600">Last Name</label>
                        <input type="text" id="last_name" name="last_name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                    </div>
                </div>
                <div class="mb-6">
                    <label for="nim" class="block text-gray-700">Student ID Number</label>
                    <input type="text" id="nim" name="nim" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                </div>
                <div class="mb-6">
                    <label for="birthplace" class="block text-gray-700">Birthplace</label>
                    <input type="text" id="birthplace" name="birthplace" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                </div>
                <div class="mb-6">
                    <label for="birthdate" class="block text-gray-700">Birthdate</label>
                    <input type="date" id="birthdate" name="birthdate" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                </div>
                <div class="text-center">
                    <button type="button" onclick="toggleSections()" class="px-6 py-2 bg-blue-400 text-white rounded-md shadow-md hover:bg-blue-500 focus:outline-none">Next</button>
                </div>
            </div>

            <div id="section2" class="hidden">
                <div class="mb-8">
                    <span class="block text-gray-700">Gender</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" id="male" name="gender" value="Male" class="form-radio" required checked> <!-- Add checked attribute here -->
                            <span class="ml-2">Male</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" id="female" name="gender" value="Female" class="form-radio" required>
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-700">Address</label>
                    <textarea id="address" name="address" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required placeholder="Enter your address here"></textarea>
                </div>

                <div class="mb-4">
                    <label for="study_program" class="block text-gray-700">Study Program:</label>
                    <select id="study_program" name="study_program" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                        <option value="S1-Informatics">S1-Informatics</option>
                        <option value="S1-System Information">S1-System Information</option>
                        <option value="S1-Computer Engineering">S1-Computer Engineering</option>
                    </select>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700">Hobbies</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" id="reading" name="hobbies[]" value="reading" class="form-checkbox text-blue-600" checked>
                            <span class="ml-2">Reading</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="checkbox" id="sports" name="hobbies[]" value="sports" class="form-checkbox text-blue-600">
                            <span class="ml-2">Sports</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="checkbox" id="music" name="hobbies[]" value="music" class="form-checkbox text-blue-600">
                            <span class="ml-2">Music</span>
                        </label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" onclick="toggleSections()" class="px-6 py-2 bg-gray-400 text-white rounded-md shadow-md hover:bg-gray-500 focus:outline-none">Previous</button>
                    <input type="submit" value="Register" class="px-6 py-2 bg-blue-400 text-white rounded-md shadow-md cursor-pointer hover:bg-blue-500 focus:outline-none">
                </div>
            </div>
        </form>
    </div>

    <script>
        function toggleSections() {
            document.getElementById('section1').classList.toggle('hidden');
            document.getElementById('section2').classList.toggle('hidden');
        }
    </script>
</body>

</html>