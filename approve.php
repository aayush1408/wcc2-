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
$update=$_GET['update'];
$name= $_GET['name'];
if(mysql_query("UPDATE `users` SET `Update`=1 where `Name`='$name'"))
{
echo "Approved";
}
?>
</body>
</html>
