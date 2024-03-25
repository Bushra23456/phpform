<?php

include("config/today.php");
$myid = $_GET['idd'];
$sql = "update empolye set name = 'henry' where id = $myid";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo"<br> your record has been inserted";
}
else{
    echo"<br>no record has been inserted";
}


?>