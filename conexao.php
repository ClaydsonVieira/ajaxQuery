<?php

$host = 'localhost'; //local onde está armazenado o bd
$user = 'root'; //usuário de login do bd
$pwd = ''; //senha do usuário de login do bd
$db = 'pronatectgk'; //nome do banco de dados

try{
    $pdo = new PDO("mysql:dbname=".$db.";host=".$host,$user,$pwd);
}catch(PDOException $e){
    echo "Error: ".$e->getMessage();
}
?>

