<?php
session_start();

$titulo =str_replace('#', ',', $_POST['titulo']);
$tipo = str_replace('#', ',', $_POST['tipo']);
$descricao = str_replace('#', ',', $_POST['descricao']);

$chamado = $titulo  . '#' . $tipo . '#' . $descricao . '#' . $_SESSION["id"] . PHP_EOL;

echo $chamado;
$chamados = fopen("listaDeChamados", "a");

if(fwrite($chamados, $chamado) === FALSE){
    fclose($chamados);
    header('location: abrir_chamado.php?erro3');
    
}
fclose($chamados);

header('location: abrir_chamado.php?sucesso=sim');
?>

