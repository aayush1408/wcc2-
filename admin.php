<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>


<?php
require_once 'http.php';
require_once 'connect.php';
$query="SELECT * FROM `users`";
$query_run=mysql_query($query);
while($row=mysql_fetch_array($query_run)){
echo '<strong>Name</strong> '.$row['Name']." "; 
echo '<strong>Score</strong> '.$row['Score']." ";
echo "<a href='remove.php?name=".$row['Name']."&score=".$row['Score']."'>Remove</a> ";
echo  "<a href='approve.php?name=".$row['Name']."&update=".$row['Update']."'>Approve</a> ";
echo '<br>';
}

?>
</body>
</html>
