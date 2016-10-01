<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<link rel="stylesheet" type="text/css" href="/css/menu.css">
<link rel="stylesheet" type="text/css" href="/css/textos.css">
<background-color: black>
</head>
<body bgcolor="black" font >
<font color="white">
<style>
body {
    background-image: url("/imgs/contos-de-fadas.jpg");
    background-repeat:no-repeat;
    background-size:cover;
}
</style>

<?php  include"menu.inc"; ?>

<h1>Envie sua Foto</h1>
<p>Envie sua foto para nosso cantinho do leitor.<br>
Toda semana nosso mural de fotos será atualizado com a foto de nossos leitores mirins.<br>
Além disso, contaremos algumas curiosidades sobre cada um deles.</p>

<h3>Dados do Leitor:</h3>
<form action="fotos_enviadas.php" method="post">
Nome: <input type="text" name="Contato"><br>
Caminho do Arquivo: <input type="text" name="Arquivo"><br>
<input type="submit">


</form>

</font>
</body>
</html>