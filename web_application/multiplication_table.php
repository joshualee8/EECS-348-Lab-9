<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the number from the form
        $number = $_POST["number"];

        // Validate the input (ensure it's a positive integer)
        if (is_numeric($number) && $number > 0 && floor($number) == $number) {
            echo "<h2>Multiplication Table for $number</h2>";
            echo "<table border='1'>";
            
            // Display column headers
            echo "<tr><th></th>";
            for ($i = 1; $i <= $number; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Display the multiplication table
            for ($i = 1; $i <= $number; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $number; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    ?>
</body>
</html>