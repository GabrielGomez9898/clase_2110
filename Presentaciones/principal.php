<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pagina principal</title>
    </head>
    <body>
        <?php
            include("ejercicios.php");

            //instanciar una cuenta bancaria
            $cuenta1 = new CuentaBancaria();
            $cuenta1->constructor(100,"davivienda",50,"debito");
            echo "Numero tarjeta: ".$cuenta1->getNumeroTarjeta()."<br>";
            echo "Banco: ".$cuenta1->getBanco()."<br>";
            echo "Saldo: ".$cuenta1->getSaldo()."<br>";
            echo "Tipo: ".$cuenta1->getTipo()."<br>";
            //cambiar datos por medio de setters
            echo "<hr><h2>Tarjeta actualizada</h2><hr>";
            $cuenta1->setNumeroTarjeta(101);
            $cuenta1->setBanco("bancolombia");
            $cuenta1->setSaldo(250);
            $cuenta1->setTipo("credito");
            echo "Nuevo numero tarjeta: ".$cuenta1->getNumeroTarjeta()."<br>";
            echo "Nuevo Banco: ".$cuenta1->getBanco()."<br>";
            echo "Nuevo Saldo: ".$cuenta1->getSaldo()."<br>";
            echo "Nuevo Tipo: ".$cuenta1->getTipo()."<br>";
            //Consignar
            $cuenta1->consignar(100);
            $cuenta1->retirar(50);

            //Creacion de segunda cuenta
            $cuenta2 = new CuentaBancaria();
            $cuenta2->constructor(102,"davivienda",100,"debito");

            //transferencia de monto
            $cuenta1->transferir(100,$cuenta2);
            echo " Saldo cuenta 1: ".$cuenta1->getSaldo()."<br>";
            echo " Saldo cuenta 2: ".$cuenta2->getSaldo()."<br>";

            //clonacion de saldo
            $cuenta1->retirar(200);
            $cuenta1->clonar($cuenta2);
            //clonar cuenta2 desde cuenta1
            $cuenta2->setSaldo(0);
            $cuenta2->clonar($cuenta1);

            //creacion de perros
            $perro1 = new Perro();
            $perro1->constructor("golden","max");
            $perro2 = new Perro();
            $perro2->constructor("labrador","dateo");
            $perro3 = new Perro();
            $perro3->constructor("pincher","perla");

            //creacion de personas
            $persona1 = new Persona();
            $persona1->constructor(1019,"gabriel",22);
            $persona2 = new Persona();
            $persona2->constructor(1020,"andres",19);
            $persona3 = new Persona();
            $persona3->constructor(1021,"daniela",35);

            //asignacion de mascotas
            $persona1->setMascota($perro2);
            $persona2->setMascota($perro1);
            $persona3->setMascota($perro3);

            //imprimir mascotas y personas
            echo "Nombre: ".$persona1->getNombre()." tiene como mascota a: ".$persona1->getMascota()->getRaza()."<br>";
            echo "Nombre: ".$persona2->getNombre()." tiene como mascota a: ".$persona2->getMascota()->getNombre()."<br>";
            echo "Nombre: ".$persona3->getNombre()." tiene como mascota a: ".$persona3->getMascota()->getNombre()."<br>";

        ?>
        
    </body>
</html>