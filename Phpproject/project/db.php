<?php 
$conn = new mysqli("localhost","root","","user_db");

if (!$conn) {
    echo "DB not connected";
}
?>