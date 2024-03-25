<?php

include("config/today.php");

$myid = $_GET['idd'];
$sql = "delete from empolye where id = $myid";
$result = mysqli_query($conn , $sql);

if($result == true){
    echo"<br> your record has been delete";
}
else{
    echo"<br>no record has been delete";
}


?>