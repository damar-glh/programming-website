<?php
include "../Connections.php";
include "EditFormSql.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $row = getStudentByNIM($nim);

    if (!$row) {
        echo "No student found with NIM: $nim";
        exit;
    }
} else {
    echo "NIM not provided!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $birthplace = $_POST['birthplace'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $study_program = $_POST['study_program'];
    $hobbies = implode(',', $_POST['hobbies']);

    if (updateStudent($nim, $first_name, $last_name, $gender, $birthplace, $birthdate, $address, $study_program, $hobbies)) {
        echo "<script>
        alert('Data berhasil diupdate')
        window.location.replace('../Proses.php');
    </script>";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}
$hobbies_array = explode(',', $row['hobbies']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="h-screen flex">
    <div class="w-1/2 bg-white flex flex-col items-center justify-center p-10">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Update</h2>
        <p class="text-gray-600 mb-6">Please complete the form to update the student's data.</p>
        <form id="registrationForm" action="" method="post" class="w-full max-w-md">
            <div id="section1">
                <div class="flex justify-between gap-2">
                    <div class="mb-6">
                        <label for="first_name" class="block text-gray-600">First Name</label>
                        <input type="text" name="first_name" id="first_name" value="<?= htmlspecialchars($row['first_name']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="block text-gray-600">Last Name</label>
                        <input type="text" name="last_name" id="last_name" value="<?= htmlspecialchars($row['last_name']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="birthplace" class="block text-gray-700">Birthplace</label>
                    <input type="text" name="birthplace" id="birthplace" value="<?= htmlspecialchars($row['birthplace']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                </div>
                <div class="mb-6">
                    <label for="birthdate" class="block text-gray-700">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" value="<?= htmlspecialchars($row['birthdate']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                </div>
                <div class="text-center">
                    <a href="../Proses.php" class="px-6 py-3 bg-gray-400 text-white rounded-md shadow-md hover:bg-gray-500 focus:outline-none">Back</a>
                    <button type="button" onclick="toggleSections()" class="px-6 py-2 bg-blue-400 text-white rounded-md shadow-md hover:bg-blue-500 focus:outline-none">Next</button>
                </div>
            </div>

            <div id="section2" class="hidden">
                <div class="mb-8">
                    <span class="block text-gray-700">Gender</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Male" <?= ($row['gender'] == 'Male') ? 'checked' : '' ?> class="form-radio h-4 w-4 text-blue-600">
                            <span class="ml-2">Male</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" name="gender" value="Female" <?= ($row['gender'] == 'Female') ? 'checked' : '' ?> class="form-radio h-4 w-4 text-blue-600">
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="address" class="block text-gray-700">Address</label>
                    <textarea name="address" id="address" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"><?= htmlspecialchars($row['address']) ?></textarea>
                </div>

                <div class="mb-4">
                    <label for="study_program" class="block text-sm font-medium text-gray-700">Study Program</label>
                    <select id="study_program" name="study_program" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-500 focus:border-gray-500" required>
                        <option value="S1-Informatics" <?= $row['study_program'] == 'S1-Informatics' ? 'selected' : '' ?>>S1-Informatics</option>
                        <option value="S1-System Information" <?= $row['study_program'] == 'S1-System Information' ? 'selected' : '' ?>>S1-System Information</option>
                        <option value="S1-Computer Engineering" <?= $row['study_program'] == 'S1-Computer Engineering' ? 'selected' : '' ?>>S1-Computer Engineering</option>
                    </select>
                </div>
                <div class="mb-4">
                    <span class="block text-gray-700">Hobbies</span>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="hobbies[]" value="reading" <?= in_array('reading', $hobbies_array) ? 'checked' : '' ?> class="form-checkbox text-blue-600">
                            <span class="ml-2">Reading</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="checkbox" name="hobbies[]" value="sports" <?= in_array('sports', $hobbies_array) ? 'checked' : '' ?> class="form-checkbox text-blue-600">
                            <span class="ml-2">Sports</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="checkbox" name="hobbies[]" value="music" <?= in_array('music', $hobbies_array) ? 'checked' : '' ?> class="form-checkbox text-blue-600">
                            <span class="ml-2">Music</span>
                        </label>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" onclick="toggleSections()" class="px-6 py-2 bg-gray-400 text-white rounded-md shadow-md hover:bg-gray-500 focus:outline-none">Previous</button>
                    <input type="submit" value="Update" class="px-6 py-2 bg-blue-400 text-white rounded-md shadow-md cursor-pointer hover:bg-blue-500 focus:outline-none">
                </div>
            </div>
        </form>
    </div>

    <div class="w-1/2 flex flex-col items-center justify-center p-10">
        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">Student Data</h2>
            <p class="text-gray-800 mb-6">Please complete the form to update the student's information accurately.</p>
            <img src="../../assets/Updatedata.svg" alt="Campus" class="w-full mx-auto rounded-xl">
        </div>
    </div>

    <script>
        function toggleSections() {
            document.getElementById('section1').classList.toggle('hidden');
            document.getElementById('section2').classList.toggle('hidden');
        }
    </script>
</body>

</html>