<?php


if (isset($_GET['nome']))
$nome = $_GET ['nome'];
else 
$nome ="nome n informado";

if (isset($_GET['sobrenome']))
$sobrenome = $_GET ['sobrenome'];
else 
$nome ="Sobrenome nao informado";

if (isset($_GET['endereco']))
$endereco = $_GET ['endereco'];

else 
$idade ="Endereço n informado";

if (isset($_GET['num']))
$num = $_GET ['num'];

else 
$idade ="Nº não informado";

if (isset($_GET['telefone']))
$telefone = $_GET ['telefone'];

else 
$idade ="telefone não informado";


if (isset($_GET['cidade']))
$cidade = $_GET['cidade'];
else 
$cidade ="n selecionado";
if (isset($_GET['masculino']))
$masculino = "masculino";

else 
$masculino ="não selecionado";

if (isset($_GET['feminino']))
$feminino = "feminino";
else 
$feminino ="n selecionado";

if (isset($_GET['carro']))
$carro = $_GET['carro'];
else 
$carro ="n selecionado";

echo "ola $nome , voce tem $idade anos !";

echo "<br>opcao1:$feminino";
echo "<br>opcao2:$masculino";
echo "<br>opcao3:$cidade";

?>