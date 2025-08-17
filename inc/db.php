<?php 

$conn= mysqli_connect('localhost', 'root', 'mo', 'win'); // connect sql
if (!$conn) {
    echo 'Error: '  . mysqli_connect_error(); // تاكيد ان الاتصال صحيح
}

?>