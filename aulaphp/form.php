<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario php</title>
</head>
<body>
 <h1>formulario php</h1>
<form action="recebe.php" method="Get">
nome: <input type="text" name="nome">
<br>
idade:<input type="text" name="idade">
<br>

<input type="checkbox" name="masculino" value="masculino">masculino
<input type="checkbox" name="feminino" value="feminino">feminino
<br>
<input type="radio" name="carro" value="fusca">fusca
<input type="radio" name="carro" value="corcel">corcel

<br>
<input type="submit" value="Enviar" name="enviar">
</form> 
</body>
</html>