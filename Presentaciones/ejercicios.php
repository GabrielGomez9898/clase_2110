<?php
    echo "<h1>Ejercicios</h1><hr>";

    //Clase CuentaBancaria
    class CuentaBancaria{

        //atributos
        private $numTarjeta;
        private $banco;
        private $saldo;
        private $tipo;

        //metodo constructor
        public function constructor($numTarjeta,$banco,$saldo,$tipo){
            $this->numTarjeta = $numTarjeta;
            $this->banco = $banco;
            $this->saldo = $saldo;
            $this->tipo = $tipo;
        }

        //metodos getters (permiten acceso)
        public function getNumeroTarjeta(){
            return $this->numTarjeta;
        }
        public function getBanco(){
            return $this->banco;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function getTipo(){
            return $this->tipo;
        }

        //metodos setters (permiten modificacion)
        public function setNumeroTarjeta($numTarjeta){
            $this->numTarjeta = $numTarjeta;
        }
        public function setBanco($banco){
            $this->banco = $banco;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        //metodos tradicionales
        public function consignar($monto){
            $this->saldo = $this->saldo+$monto;
            echo "Consignado exitosamente! monto: ".$monto." su nuevo saldo es: ".$this->saldo."<br>";
        }
        public function retirar($monto){
            $this->saldo = $this->saldo-$monto;
            echo "Retirado exitosamente! monto retirado: ".$monto." su nuevo saldo es: ".$this->saldo."<br>";
        }
        public function transferir($monto,$cuentaBancaria){
            $this->retirar($monto);
            $cuentaBancaria->consignar($monto);
            echo "Monto transferido: ".$monto."<br>";
        }
        public function clonar($cuentaBancaria){

            if(($this->saldo == 0) && ($cuentaBancaria->getSaldo() > 0)){
                $saldo = $cuentaBancaria->getSaldo();
                $this->saldo = $saldo;
                echo "Clonacion exitosa, Nuevo saldo de la cuenta: ".$this->getNumeroTarjeta()." es: ".$this->saldo."<br>";
            }else{
                echo "Clonacion denegada <br>";
            }

        }

    }


    //Clase persona
    class Persona{

        //atributos
        private $cedula;
        private $nombre;
        private $edad;
        private $mascota;

        //metodo constructor
        public function constructor($cedula,$nombre,$edad){
            $this->cedula = $cedula;
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        //metodos getter(obtener los atributos) y setters(asignar nuevos valores a los atributos)
        public function setCedula($cedula){
            $this->cedula = $cedula;
        }
        public function getCedula(){
            return $this->cedula;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setEdad($edad){
            $this->edad = $edad;
        }
        public function getEdad(){
            return $this->edad;
        }
        public function setMascota($mascota){
            $this->mascota = $mascota;
        }
        public function getMascota(){
            return $this->mascota;
        }


    }


    //Clase perro
    class Perro{

        //atributos
        private $raza;
        private $nombre;

        //metodo constructor
        public function constructor($raza,$nombre){
            $this->raza = $raza;
            $this->nombre = $nombre;
        }

        //metodos getter(obtener los atributos) y setters(asignar nuevos valores a los atributos)
        public function setRaza($raza){
            $this->raza = $raza;
        }
        public function getRaza(){
            return $this->raza;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }

    }

    

?>