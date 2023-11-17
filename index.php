<?php

// Definimos la clase
class Coche {
   public $marca;
   public $modelo;

   // Método constructor
   public function __construct($marca, $modelo) {
       $this->marca = $marca;
       $this->modelo = $modelo;
   }

   // Método para obtener la información del coche
   public function obtenerInfo() {
       return "Marca: " . $this->marca . ", Modelo: " . $this->modelo;
   }
}

// Creamos un objeto de la clase Coche
$miCoche = new Coche("Toyota", "Corolla");

// Imprimimos la información del coche
echo $miCoche->obtenerInfo();

?>
