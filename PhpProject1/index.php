<?php
include '.\FormPersonal.php';

    $nombres = 'Yineth Samantha';
    $apellidos = 'Bello Dueñas';
    $fecha_nacimiento ='18-01-2005';
    $documento ='1024469978';
    $tipo_documento ='Cedulá';
    $direccion='Calle 65 c sur # 18v14';
    $ciudad='Bogotá';
    $email='yinethsamantha';
    
    $userBasics = new FormPersonal($nombres, $apellidos, $fecha_nacimiento, $documento, $tipo_documento, $direccion, $ciudad, $email);
    
    echo $userBasics ->getDataUser();
    
    