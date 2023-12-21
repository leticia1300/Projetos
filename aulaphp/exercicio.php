<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario php</title>
</head>
<body>
 <h1>fcadrasto</h1>
<form action="recebe.php" method="Get">
nome: <input type="text" name="nome">

Sobrenome:<input type="text" name="sobrenome">
<br>
Endereço:<input type="text" name="endereco">
Nº:<input type="text" name="num">
<br>
telefone:<input type="text" name="telefone">

<label for="cidade" value="cidade"> Cidade</label>
                    <select type="cidade" id="cidade">
                    <option value=" cidade" selected> Piracicaba</option>
        <option value="cidade">Joiville</option>
        <option value="cidade">florianopolis</option>

        </select>
<br>

       gmail:<input type="text" name="gmail">
      <br>   <br>
     

Sexo:
<input type="radio" name="masculino" value="masculino">masculino
<input type="radio" name="feminino" value="feminino">feminino
<br>
Voce gostaria de receber informaçoes sobre

<div> 
<br>
<input type="checkbox" name="botao" value="musica">musica
<input type="checkbox" name="botao" value="corcel">
<br>
<input type="checkbox" name="botao" value="fusca">cinema
<input type="checkbox" name="botao" value="corcel">culinaria
<br>
<input type="checkbox" name="botao" value="fusca">Esportes
<input type="checkbox" name="botao" value="corcel">mercado finaceiro
<br>
<input type="checkbox" name="botao" value="fusca">informatica
<input type="checkbox" name="botao" value="corcel">carros/motos

<br>
<input type="submit" value="Enviar" name="enviar dados">
<input type="submit" value="limpar" name="limpar dados">
</form> 
</body>
</html>