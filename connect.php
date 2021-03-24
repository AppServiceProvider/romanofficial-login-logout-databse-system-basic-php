<?php
 $db =new PDO('mysql:host=localhost; dbname=my_dbms', 'root', '');
if($db){
//    echo "connect";
}else{
    echo"not connect";
};
?>

<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=my_dbms", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> -->
