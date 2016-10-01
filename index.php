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

<h1>Bem vindo ao Conta um Conto!</h1>
<p>Cansado de ver as crianças na internet sem nada educativo ou interessante para fazer?<br>
Que tal um lugar com um monte de contos novos para exercitar a criatividade e imaginação?<br>
O "Conta um Conto" é um site criado para incentivar a leitura de crianças de todas as idades.<br>
Seja bem vindo e bom divertimento!</p>

<h3>Entre com seus dados:</h3>
<form action="welcome.php" method="post">
Login: <input type="text" name="Login"><br>
Senha: <input type="password" name="Senha"><br>
<input type="submit">

</form>

</font>
</body>
</html>