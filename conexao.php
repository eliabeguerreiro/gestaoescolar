<?php

function conectar(){
	$servidor = "localhost:3308";
	$usuario = "root";
	$senha= "";
	$bd = "gestaoescolar";
	
	$con = new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
	
}

$conexao = conectar();


?>

