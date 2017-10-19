<?php 
include "config/conn.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sistema de Gestão</title>
<script type="text/javascript" src="scripts/jquery.js"></script>

</head>
<style type="text/css">
@import "css/ind.css";
</style>
<link rel="shortcut icon" href="images/x.ico" type="image/x-icon">
<link rel="icon" href="images/x.ico" type="image/x-icon">
<body>
<div id="menu">
<div id="header" align="center">

<div id="btn_1">
<a href="bin/inventario.php" target="_self">Inventáriar</a>
</div>

<div id="btn_2">
<a href="bin/Chamados.php" target="_self">Abrir Chamado</a>
</div>


<div id="btn_3">
<a href="bin/pesquisar.php" target="_self">Pesquisa de Chamados</a>
</div>

<div id="btn_4">
<a href="bin/linha_do_tempo.php" target="_self">Andamento de Chamados</a>
</div>

<div id="btn_5">
<a href="bin/Dados_Cadastrados.php" target="_self">Inventariados</a>
</div>
<div id="btn_6">
<a href="bin/dados_recu_2.php" target="_self">Pesquisa de Inventários</a>
</div>

</div>
</div>
<div id="conteudocentral">
<iframe src="bin/contadores.php" scrolling="no" frameborder="0" name="contadores" width="100%" height="500px" id=""></iframe>
</div>

<div id="conteudorodape">
<iframe src="bin/rodape.php" scrolling="no" frameborder="0" name="rodape" width="100%" height="auto" id=""></iframe>
</div>

</body>
</html>
