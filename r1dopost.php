<?php
include 'dbase.php';
$token=$_POST['token'];
$token=($token);

if (empty($token)){
    header("location:input.php");
}
else{
    $sql="INSERT INTO r1 (token) VALUES ('$token')";
  if ($conn->query($sql) === TRUE) {
    header("location:input.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    
}
?>