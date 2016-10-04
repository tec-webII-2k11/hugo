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

<h1>Envie seu Conto</h1>
<p>Todo mês iremos ler uma história, um conto ou uma fábula bem legal!<br>
Poderemos ler a sua também, caso tenha uma historinha ou quiser reinventar alguma conhecida, poderá contar nessa coluna, nos escreva agora mesmo!<br>
Além disso, contaremos algumas curiosidades relacionadas às histórias e contos.</p>

<h3>Dados do Conto:</h3>
<form action="contos_enviados.php" method="post">
Título: <input type="text" name="Titulo"><br>
Conto: <input type="text" name="Conto"><br>
<input type="submit">

</form>

</font>
</body>
</html>