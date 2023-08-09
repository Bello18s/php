<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of FormPersonal
 *
 * @author Aprendiz
 */
class FormPersonal {
    public $nombres = '';
    public $apellidos = '';
    public $fecha_nacimiento ='';
    public $documento ='';
    public $tipo_documento ='';
    public $direccion='';
    public $ciudad='';
    public $email='';
    
    public function __construct($nombres, $apellidos, $fecha_nacimiento, $documento, $tipo_documento, $direccion, $ciudad, $email) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->documneto = $documento;
        $this->tipo_documento = $tipo_documento;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }

    public function getDataUser() {
        return $this ->nombres .' '.$this->apellidos ;
        
    }
}
