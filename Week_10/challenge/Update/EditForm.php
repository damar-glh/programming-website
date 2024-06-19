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
    $hobbies = $_POST['hobbies'];

    if (updateStudent($nim, $first_name, $last_name, $gender, $birthplace, $birthdate, $address, $study_program, $hobbies)) {
        echo "<script>
        alert('Data berhasil diupdate')
        window.location.replace('../Proses.php');
    </script>";
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }
}
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

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Edit Student Data</h1>
        <form method="POST" action="">
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?= htmlspecialchars($row['first_name']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?= htmlspecialchars($row['last_name']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <input type="text" name="gender" id="gender" value="<?= htmlspecialchars($row['gender']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="birthplace" class="block text-sm font-medium text-gray-700">Birthplace</label>
                <input type="text" name="birthplace" id="birthplace" value="<?= htmlspecialchars($row['birthplace']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="birthdate" class="block text-sm font-medium text-gray-700">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" value="<?= htmlspecialchars($row['birthdate']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="address" id="address" class="mt-1 p-2 block w-full border border-gray-300 rounded-md"><?= htmlspecialchars($row['address']) ?></textarea>
            </div>
            <div class="mb-4">
                <label for="study_program" class="block text-sm font-medium text-gray-700">Study Program</label>
                <input type="text" name="study_program" id="study_program" value="<?= htmlspecialchars($row['study_program']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="hobbies" class="block text-sm font-medium text-gray-700">Hobbies</label>
                <input type="text" name="hobbies" id="hobbies" value="<?= htmlspecialchars($row['hobbies']) ?>" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Update</button>
            </div>
        </form>
    </div>
</body>

</html>