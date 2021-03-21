<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <?php
//    echo $name=$_SESSION['name'];
        $name=$_SESSION['name'];
    if(!$name){
        header("location:index.php");
    };
    ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <h1 class="mb-5"> <b>WELCOME ADMIN</b></h1>
                <p><a href="logout.php">Log Out</a></p>
            </div>
        </div>
    </div>


</body>

</html>
