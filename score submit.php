

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
a{
float:right;}
</style>
</head>

<body>

<?php 
//connection to database
include 'connect.php';
?>
<?php
//get date and time.
$date=date('m/d/Y h:i:s a',time());
?>
<a href="homepage.php">Back to home page.</a>
<form action="" method="post" enctype="multipart/form-data">
Name:<input type="text" name="name"/><br />
<br />
Score:<input type="text" name="score" /><br />
<br />
Screenshot:<input type="file" name="screenshot" /><br />
<br />
<input type="submit" />
</form>

<?php

if( isset($_POST['name']) && isset($_POST['score']) && isset($_FILES['screenshot']['name']) )
{   

    if(!empty($_POST['name']) && !empty($_POST['score']) && !empty($_FILES['screenshot']['name']))
        {
		   $location='images/';
		   $screenshot=mysql_real_escape_string(trim($_FILES['screenshot']['name']));//Securing using trim.
           $name=mysql_real_escape_string(trim($_POST['name']));
           $score=mysql_real_escape_string(trim($_POST['score']));
		   $location.=$screenshot;
		   if(is_numeric($score)){    
			   if(move_uploaded_file($_FILES['screenshot']['tmp_name'],$location)) //moving file to image folder
			       {
		           $query="SELECT 'Name' FROM `users` where `Name`='$name'";
		           $query_run=mysql_query($query);
                   $num_of_rows=mysql_num_rows($query_run);
                      if($num_of_rows==0)//checking if user already exists
					  {
                      $query="INSERT INTO `users` (`Name`,`Score`,`Date`,`Screenshot`) VALUES('$name','$score',now(),'$screenshot')";
                          if($query_run=mysql_query($query))
                            {     
                            echo "You'r added into the list.Once we verify your score,we'll be displaying on our website.";
                            }
                       }

                       else
					   {
                          echo "Username already exists.";
                       }
							 }
					}
					else{
					echo "Don't enter shit.";
					}		 
					}		 
                    else{
                       echo "Fill in all the fields.";
                       }
					   
}


?>


</body>
</html>
