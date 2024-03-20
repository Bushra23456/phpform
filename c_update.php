<?php

include("config/today.php");
$sql = "update empolye set name = 'harry' where id = 3";
$result = mysqli_query($conn , $sql);




?>