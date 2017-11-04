<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h4>Welcome to our site..If you think you have the skills to make in the list add your score.<a href="score submit.php">Add your Score</a></h4>
<?php
$location='images/';
include 'connect.php';
$query="SELECT * FROM `users` where `Update`=1 ORDER BY `Score` DESC";
$query_run=mysql_query($query);
while($row=mysql_fetch_array($query_run)){
echo "<strong>Name:</strong>".$row['Name']."<br>";
echo "<strong>Score:</strong>".$row['Score']."<br>";
echo "<strong>Date:</strong>".$row['Date']."<br>";
echo '<img src="'.$location.$row['Screenshot'].'" width="400" height="200"/>';
echo '<br><br>';
}
?>


</body>
</html>
