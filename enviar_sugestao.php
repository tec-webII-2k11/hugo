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

<h1>Queremos ouvir você!</h1>
<p>O que tem achado do site?<br>
Quais melhorias podemos realizar para aumentar sua satisafação?<br>
Estamos ansiosos para ouvir sua opinião!</p>

<h3>Entre com sua sugestão:</h3>
<form action="welcome.php" method="post">
E-mail: <input type="email" name="Email"><br>
Sugestão: <input type="text" name="Sugestao"><br>
<input type="submit">

</form>

</font>
</body>
</html>