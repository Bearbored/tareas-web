<?php

    // clase curriculum
    class cv{
        // propiedades de la clase curriculum
        private $nombres;
        private $apellidos;
        private $dni;
        private $titulo;
        private $celular;
        private $correo;
        private $linked;
        private $descripcion;
        // laboral 1
        private $cargo1;
        private $lugar1;
        private $inicio1;
        private $final1;
        // laboral 2
        private $cargo2;
        private $lugar2;
        private $inicio2;
        private $final2;
        // metodo constructor de la clase curriculum
        // agregamos parametros claves como principales
        function __construct($nombres_, $apellidos_, $dni_){
            $this->nombres = $nombres_;
            $this->apellidos = $apellidos_;
            $this->dni = $dni_;
        }

        function setTitulo($titulo_){
            $this->titulo = $titulo_;
        }

        function setCelular($cel){
            $this->celular = $cel;
        }

        function setCorreo($correo_){
            $this->correo = $correo_;
        }

        function setLinked($linked_){
            $this->linked = $linked_;
        }

        function setPerfilPro($des){
            $this->descripcion = $des;
        }

        function setExpLab1($cargo, $lugar, $inicio, $final){
            $this->cargo1 = $cargo;
            $this->lugar1 = $lugar;
            $this->inicio1 = $inicio;
            $this->final1 = $final;
        }

        function setExpLab2($cargo, $lugar, $inicio, $final){
            $this->cargo2 = $cargo;
            $this->lugar2 = $lugar;
            $this->inicio2 = $inicio;
            $this->final2 = $final;
        }

        function getNombres(){
            return $this->nombres;
        }

        function getApellidos(){
            return $this->apellidos;
        }

        function getDni(){
            return $this->dni;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function getCelular(){
            return $this->celular;
        }

        function getCorreo(){
            return $this->correo;
        }

        function getLinked(){
            return $this->linked;
        }

        function getPerfilPro(){
            return $this->descripcion;
        }

        function getExpLabol1(){
            return $this->cargo1." | ".$this->lugar1." | ".$this->inicio1." hasta ".$this->final1;
        }

        function getExpLabol2(){
            return $this->cargo2." | ".$this->lugar2." | ".$this->inicio2." hasta ".$this->final2;
        }
    }

?>