<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar series</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="cabecalho">
        <img src="image1.jpg"width="400" height="208"/>
        <div>
    <h1>Cadastre suas Séries Favoritas</h1>
    <hr>
    <br>
    <form method="post" id="cadrastro" action="cadastro.php">

    <p><label for="Titulo">Titulo:</label><input type="text" name="titulo" id="titulo"size="60" maxlenght="100" placeholder="digite o titulo da série"></p>
    <p><label for="Atriz principal">atriz principal:</label><input type="text" name="atriz principal" id="atriz principal"size="30" maxlenght="100" placeholder="digite o nome:"></p>
    <p><label for="Ator principal">ator principal:</label><input type="text" name="ator principal" id="ator principal"size="40" maxlenght="100" placeholder="digite o nome:"></p>
    <p><label for="Total epsódios">total epsodios:</label><input type="number" name="total epsodios" id="total epsodios"size="25" maxlenght="100" placeholder="ver total de epsódios"></p>
    <p>Sinopse</p>
    <p><textarea name="sinopse"id="Sinópse" id="sinopse" class="textarea"></textarea></p>
    </fieldset>
    <br>
    <header class="botao">
<input type="image" src="botao.jpg" style="border: o;"height="32" widh="181">
</header>
</form>
<div class="rodape">
<img src="image2.jpg"whidht="120" height="130"/>
</div>
</body>
</html>