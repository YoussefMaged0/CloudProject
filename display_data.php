<?php

    $connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'team_data' # db table
    );


    $query = "SELECT STUDENT_NAME, ID, AGE, CGPA ,SEMESTER FROM team_data";
    $result = mysqli_query($connect, $query);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Data</title>
    <link rel="stylesheet" href="csstwo.css">
    </head>

<body>
    <div class="container">
        <h1>Students Data:</h1>
        <?php
        if (empty($result)) {
            echo "<div>";
            echo "<p>There is no data</p>";
            echo "</div>";
        } else {
            foreach ($result as $row) {
                echo "<div class='student'>";
                echo "<h4>ID: " . (isset($row['ID']) ? htmlspecialchars($row['ID']) : "N/A") . "</h4>";
                echo "<p>STUDENT_NAME: " . (isset($row['STUDENT_NAME']) ? htmlspecialchars($row['STUDENT_NAME']) : "N/A") . "</p>";
                echo "<p>AGE: " . (isset($row['AGE']) ? htmlspecialchars($row['AGE']) : "N/A") . "</p>";
                echo "<p>CGPA: " . (isset($row['CGPA']) ? htmlspecialchars($row['CGPA']) : "N/A") . "</p>";
                echo "<p>SEMESTER: " . (isset($row['SEMESTER']) ? htmlspecialchars($row['SEMESTER']) : "N/A") . "</p>";

                echo "</div>";
                echo "<hr>"; // Use <hr> for horizontal rule (not </hr>)
            }
        }
        ?>
    </div>

    <div class="form-container">
        <button onclick="location.href='index.php'" class="option-btn">Return to Home Page</button>
        <button onclick="location.href='data_entry.php'" class="option-btn">Enter Student Data</button>
    </div>

    <script src="js.js"></script> <!-- Include your JavaScript file -->
</body>

</html>