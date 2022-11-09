<?php

    include_once("templates/static-templates/topo.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $conteudo = "templates/fileName.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }
    include_once("templates/static-templates/rodape.php");
?>
