<?
if(file_exists("install/index.php")){
    //perform redirect if installer files exist
    //this if{} block may be deleted once installed
    header("Location: install/index.php");
}
?>

<html>
<head>
    <title>Add hour system</title>
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/mdb.min.css">
</head>
<body>
<center>
    <br><br><br><br><br>
    <a href="add-hour.php" class="btn btn-success">Log hours</a> <a href="hours.php" class="btn btn-success">View hours</a>
</center>
</body>
</html>
