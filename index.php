<?php
echo "<!DOCTYPE html><html><head>";
include_once("topo.php");
echo "</head><body>";

echo "<header>";
include_once("menu.php");
echo "</header>";

echo "<main>";
// Verifica se a query string está vazia
if (empty($_SERVER["QUERY_STRING"])) {
    $VAR = "conteudo.php";
    include_once($VAR);
} else {
    // Obtém o valor da query string 'pg'
    $pg = $_GET['pg'];

    // Lista de arquivos permitidos para inclusão
    $paginasPermitidas = ["conteudo", "quemsomos", "clientes", "faleconosco", "principal"];
    
    // Verifica se o arquivo solicitado está na lista de páginas permitidas
    if (in_array($pg, $paginasPermitidas)) {
        include_once("$pg.php");
    } else {
        echo "Página não encontrada!";
    }
}
echo "</main>";

echo "<footer>";
include_once("rodape.php");
echo "</footer>";

echo "</body></html>";
?>