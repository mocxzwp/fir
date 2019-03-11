<?php
 include 'dbase.php';
       $sql="SELECT * FROM rt ORDER by id DESC LIMIT 1";
     $result=  mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($result))
             echo $row['runingtext'];
        ?>