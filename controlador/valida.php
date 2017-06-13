<?php


session_start();
include '../libreria.php';

$oUsuario=new Usuario($_REQUEST["nomusu"],$_REQUEST["claveusu"]);

if($oUsuario->VerificaAcceso()){
    echo "Acceso OK";
    $_SESSION["USR"]=$oUsuario;
}else{
    "Acceso Error";
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

