<?php
include ("connect.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>bootstrap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <form action="" method="post">
                    <label>Enter User Name:</label>
                    <input type="text" name="userName" placeholder="User Name">
                    <label>Enter User Password:</label>
                    <input type="text" name="userPassword" placeholder="User Password">
                    <input class="mt-3" type="submit" name="submit" value="Login">
                </form>
                <?php
                if (isset ($_REQUEST["submit"])){
                     $name= $_REQUEST["userName"];
                     $pass= $_REQUEST["userPassword"];
                    $q = $db-> prepare("SELECT *FROM admin WHERE username='$name' && userpassword='$pass' ");
                    $q->execute();
                    $res =$q->fetchAll(PDO::FETCH_OBJ);
//                    if ($res){
//                        echo "right";
//                    }else{
//                        echo "wrong";
//                    }
                    
                    if ($res){
                        $_SESSION['name']=$name;
                        header("location:admin-home.php");
                    }else{
                        echo "<script> alert('Wrong User')</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>
