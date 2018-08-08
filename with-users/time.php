<html>
<head>
    <title>Staff logging</title>
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?php
include 'include/db.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];
$hours = $_POST['hours'];
$year = $_POST['year'];
$usname = $_POST['usname'];
$sql = "INSERT INTO hours2 (date, hours, year, usname) VALUES ('$date', '$hours', '$year', '$usname')";

if(!mysqli_query($conn,$sql))
{
    echo '<div class="alert alert-danger" role="alert">
  Something went wrong
</div>';
}
else {
    echo '<div class="alert alert-success" role="alert">
  Hours successfully logged!</a>.
</div>';
}



$conn->close();
?>

<body>
<br><br><br>
<a href="add-hour.php" class="btn btn-success">Log hours</a> <a href="hours.php" class="btn btn-success">View Hours</a>
</body>



