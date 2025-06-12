<?php
include 'db.php';

header("Content-Type:text/csv");
header("Content-Disposition:attachment;filename=product.csv");

$output=fopen("php://output","w");
fputcsv($output,array("pid","pname","price","quantity","category"));

$result=$conn->query("select * from product");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}

fclose($output);
?>