<?php
include 'dbase.php';
$token=$_POST['rt'];
$token=($token);

if (empty($token)){
    header("location:input.php");
}
else{
    $sql="INSERT INTO rt (runingtext) VALUES ('$token')";
  if ($conn->query($sql) === TRUE) {
    header("location:input.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    
}
?>