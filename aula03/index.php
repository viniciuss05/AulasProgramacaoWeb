<?php
$preco = 10;

if($preco >= 20){
    echo "Não posso comprar!";
}else{
    echo 'Posso comprar!';
}

$nota = 9.5;

echo "</br>";

if($nota >= 7){
    echo "Aprovado";
}else if($nota >= 4){
    echo "Recuperação";
}else{
    echo "Reprovado";
}

//$sexo = 'M';

//switch(sexo){
//    case 'F';
//    echo 'Feminino';
//    break;
//    case 'M';
//    echo 'Masculino';
//    break;
//    default;
//    echo 'Outros';
//    break;
//}

echo "</br>";

$contador = 0;

while($contador <= 10){
    echo "</br>";
    echo $contador++;
}
echo "</br>"; 
for($i = 10; $i <= 50; $i++){
    echo "</br>";
    echo $i;

}


?>