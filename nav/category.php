<?php
    include("../config/today.php");

    $ID = $_GET['id'];
    $sql = "SELECT * FROM `product` where category = $ID";
    $result = mysqli_query($conn , $sql);

    while($opt = mysqli_fetch_assoc($result)){
        echo $opt['name'];
    }

?>