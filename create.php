
<?php

    include("config/today.php");

    if(isset($_POST['submit'])){
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "insert into empolye (name, email , password) values ('$userName' , '$email' , '$password')";
        $result = mysqli_query($conn , $sql);

        if($result == true){
            echo "<br> Your record has been inserted";
        }
        else{
            echo "<br> No record has been inserted";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>

                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>

                    <input type="submit" value="submit" name="submit" class="btn btn-dark mt-3">
                </form>
            </div>
            <div class="col-lg-6">
                <?php
                    echo "<pre>";
                    print_r($_POST);
                    echo"</pre>";
             ?>
            </div>
        </div>
    </div>
    
</body>
</html>