<?php
$sname = $_POST['host'];
$username = $_POST['susername'];
$pass = $_POST['pass'];
$dataname = $_POST['name'];

$servername = "$sname";
$username = "$username";
$password = "$pass";
$dbname = "$dataname";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE hours (
  date text NOT NULL,
  hours int(10) NOT NULL,
  year text NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "<div class=\"alert alert-success\" role=\"alert\">
  Successfully Installed The Database
</div>";
} else {
    echo "<div class=\"alert alert-danger\" role=\"alert\">
  Something went wrong: $conn->error;
</div>";
}

$conn->close();

?>

<head>
    <title>Installing Hours Step 2</title>
    <link href="../css/mdb.min.css" rel="stylesheet">
</head>
<body>
<br><br><br><br>
<a href="finish.php" class="btn btn-success">Finish</a>
</body>


