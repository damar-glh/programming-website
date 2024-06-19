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
                    <th class="py-2">Actions</th>
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
                    echo '<td class="py-2 flex justify-around">
                            <a href="./Update/EditForm.php?nim=' . htmlspecialchars($row['nim']) . '">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                                <path d="m15 5 4 4" />
                                </svg>
                            </a>
                            <a href="./Delete/Delete.php?nim=' . htmlspecialchars($row['nim']) . '">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                            </a>
                        </td>';
                    echo "</tr>";
                }

                mysqli_free_result($result);
                // mysqli_close($mysqli);
                ?>
            </tbody>
        </table>
        <a href="./Create/Form.php" class="mt-4 inline-block bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded-md" style="margin-left: 50%;">Add</a>
    </div>
</body>

</html>