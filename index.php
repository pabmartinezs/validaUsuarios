<?php 
include 'libreria.php';
session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <script src="<?=URL?>js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <body>
        <?php
        if(!isset($_SESSION["USR"])){
        ?>
        <form action="<?=URL?>controlador/valida.php" method="post">
            <div><label>Usuario: </label><input type="text" id="nomusu" name="nomusu"></div>
            <div><label>Password:</label><input type="password" id="claveusu" name="claveusu"></div>
            <div><input id="enviar" type="button" value="Acceder"></div>
            <div id="msjweb"></div>
        </form>
        <?php }else{?>
        <a href="<?=URL?>controlador/cerrarsesion.php">Cerrar Sesión</a>
        <?php }?>
        
    </body>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#enviar").click(function(){
                if($("#nomusu").val()=="" || $("#claveusu").val()==""){
                    alert("Debe agregar usuario y clave");
                }
                else{
                    $.ajax({url:"<?=URL?>controlador/valida.php"
                            ,type:"post"
                            ,data:{'nomusu':$("#nomusu").val(),
                                    'claveusu':$("#claveusu").val()}
                                ,success:function (resweb){
                                    $('#msjweb').html(resweb);
                                }
                            });//cierre ajax
                }
             });//cierre boton
        });//cierre click

    </script>
</html>
