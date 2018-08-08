<?php
$servername = "*********";
$username = "*********";
$password = "*********";
$dbname = "*********";
?>
<html>
<head>
    <title>Display Staff Hours</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th {
            background-color: #588c7e;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
    </style>
</head>
<body>
<table>
    <tr>
        <th>Date</th>
        <th>Hours</th>
        <th>Year</th>
    </tr>
    <?php
    include 'include/db.php';
    $sql = "SELECT date, hours, year FROM hours";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["date"] . "</td><td>" . $row["hours"] . "</td><td>"
                . $row["year"] . "</td></tr>";
        }
        echo "</table>";
    }
    $conn->close();
    ?>
</table>
</body>
</html>