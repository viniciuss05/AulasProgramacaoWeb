<?php
// Aula Métodos GET e POST = 15/03
if(empty ($_POST['nome'] ) or empty($_POST['senha']) or empty($_POST['email']) or emptu($_POST['observacao']){
    echo "<script tipy='javascript'>alert('Nome muito curto');";
    echo "javascript:window.location='index.php';</script>";
}



$nome =$_POST['nome'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$obervacao =$_POST['observacao'];

if (strlen($nome) >= 10){
    echo $nome."<br>";
}else{
    echo "<script tipy='javascript'>alert('Nome muito curto');";
    echo "javascript:window.location='index.php';</script>";
}

echo $email."<br>";
echo $senha."<br>";
echo $obervacao."<br>";



?>