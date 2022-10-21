<?php
include("conexao.php");

$data = $_GET['datepicker'];
$tabela = "pessoa";
$query = "SELECT * FROM " .$tabela. " WHERE datanascimento = '" .$data."'";

$sql = $pdo->query($query);

if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $value){
        echo "<h3>Nome ".$value['nome']."</h3>";
        echo "<h3>Idade ".$value['idade']."</h3>";
        echo "<h3>CPF ".$value['CPF']."</h3>";
    }
}

?>