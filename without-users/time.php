<html>
<head>
    <title>Staff logging</title>
    <link rel="stylesheet" type="text/css" href="css/mdb.css">
    <link rel="stylesheet" type="text/css" href="css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<?

 include 'include/db.php';

$date = $_POST['date'];
$hours = $_POST['hours'];
$year = $_POST['year'];

$sql = "INSERT INTO hours (date, hours, year) VALUES ('$date', '$hours', '$year')";

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



