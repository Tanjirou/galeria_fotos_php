<?php
require_once('funciones.php');

$conexion = conexion('galeria', 'ulquiorra','');

if(!$conexion){
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if(!$id){
    header('Location: index.php');
}

$statemente = $conexion->prepare('Select * from fotos where id = :id');
$statemente->execute(array(':id'=>$id));

$foto = $statemente->fetch();

if(!$foto){
    header('Location: indes.php');
}
require_once('views/foto.view.php');
?>