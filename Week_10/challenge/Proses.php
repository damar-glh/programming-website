<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Student Data</h1>
        <table class="w-full bg-white border-2">
            <thead>
                <tr>
                    <th class="py-2">First Name</th>
                    <th class="py-2">Last Name</th>
                    <th class="py-2">NIM</th>
                    <th class="py-2">Gender</th>
                    <th class="py-2">Birthplace</th>
                    <th class="py-2">Birthdate</th>
                    <th class="py-2">Address</th>
                    <th class="py -2">Study</th>
                    <th class="py-2">Hobbies</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "Connections.php";

                $result = mysqli_query($mysqli, "SELECT first_name, last_name, nim, gender, birthplace, birthdate, address, study_program, hobbies FROM students") or die(mysqli_error($mysqli));

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='text-center border-2'>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['first_name']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['last_name']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['nim']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['gender']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['birthplace']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['birthdate']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['address']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['study_program']) . "</td>";
                    echo "<td class='py-2'>" . htmlspecialchars($row['hobbies']) . "</td>";
                    echo "</tr>";
                }

                mysqli_free_result($result);
                // mysqli_close($mysqli);
                ?>
            </tbody>
        </table>
        <a href="./Create/Form.php" class="mt-4 inline-block bg-blue-400 text-white px-4 py-2 rounded-md">Add</a>
    </div>
</body>

</html>