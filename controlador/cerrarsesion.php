<?php

include '../libreria.php';
session_start();
session_unset();

header('Location: '.URL);
exit();
//session_destroy();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

