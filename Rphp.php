<?php
$serv="localhost";
$user="root";
$passw="";
$db="read4less";

$conn=mysqli_connect($serv,$user,$passw,$db);

if(!$conn)
    die("Error".mysqli_connection_error);

$sql="INSERT INTO users VALUES('$_POST[un]','$_POST[ps]','$_POST[nm]','$_POST[ad]','$_POST[ph]','$_POST[em]')";
if(mysqli_query($conn,$sql))
    echo "welcome ".$_POST['nm']." your password is".$_POST['ps'];
else
echo"error";



mysqli_close($conn);

?>
