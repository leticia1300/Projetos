<?php 
 echo"aula 01 - php   ";

$idade = 18; //inteiro
$nome = "leticia"; // string
$salario =  10.50;//float
$soma = $idade + $salario;//soma de inteiro com  float
/* mostra tela */ 
//com aspas duplas
echo " <br>ola $nome voce tem  $idade e  recebe R$ $salario";

/*com uma aspa*/
echo ' <br>ola '.$nome. 'voce tem'.$idade.' e  recebe R$'.$salario;
echo"<br> Soma : $soma";


//com code html


$i=0;
do{

    $i++;
    echo"<br><h1 style='background-color:blue;'><font color='red'> Soma : $soma </font><h1>";
    }while($i<10);
?>