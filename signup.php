<?php

$serv="localhost";
$user="mohamed";
$passw="";
$db="read4less";


$conn=mysqli_connect($serv,$user,$passw,$db);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO users VALUES ('$_POST[un]', '$_POST[ps]', '$_POST[nm]', '$_POST[ad]', '$_POST[ph]', '$_POST[em]')";

if(mysqli_query($conn,$sql)){
    echo "New record created successfully";
    //.$_POST['nm']." your password is".$_POST['ps'];
}else{
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>
