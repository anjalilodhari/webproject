<?php
$name = "";
$address  = "";

$db=mysqli_connect('localhost', 'root','','registration' );


$name = $_POST["name"];
$address = $_POST["address"];

$address_length = strlen($address);

if($address_length > 100)
{
	header("location: index.php?error=1");
}
else
{
	$query = ("INSERT INTO restaurant(name, address) VALUES('$name','$address')");
	header("location: index.php");
}

?>



<div>
    <form action="postaddr.php" method="POST">
 <input type="text" name="name" value="name"><br>
 <textarea name="address" cols="50" rows="2">Enter a new address</textarea> 
 <input type="submit" value="submit">
</form>
  </div>