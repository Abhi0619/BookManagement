<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'brm_db');
$q="INSERT INTO book(title,price,author) values ('$title',$price,'$author')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!doctype.html>
<html>
<head>
<title> Insertion form </title>
</head>
<body>
<h1> book record mangement</h1>
<p><?php
    if($status)
		echo "record inserted";
	else
		echo "insertion failed";
	?> you want to insert more record?
	<a href="forminsert.php">click here</a></p>
</body>
</html>
