<?php
 $db =new PDO('mysql:host=localhost; dbname=my_dbms', 'root', '');
if($db){
//    echo "connect";
}else{
    echo"not connect";
};
?>