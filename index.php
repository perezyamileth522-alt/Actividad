<?php
// =========================================
// Actividad Formativa 2
// Aplicación Simple en PHP - Gestión de Estudiantes
// Autora: Reyna Yamileth Perez Martinez
// =========================================

// Definición de la clase Estudiante
class Estudiante {

    // Atributos privados (Encapsulamiento)
    private $nombre;
    private $matricula;
    private $carrera;
    private $promedio;

    // Constructor: Inicializa los atributos
    public function __construct($nombre, $matricula, $carrera, $promedio) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->promedio = $promedio;
    }

    // Método para mostrar la información del estudiante
    public function mostrarInformacion() {
        echo "<h3>Información del Estudiante</h3>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Carrera: " . $this->carrera . "<br>";
        echo "Promedio: " . $this->promedio . "<br><br>";
    }

    // Método para actualizar el promedio
    public function actualizarPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }
}

// ==========================
// Programa Principal
// ==========================

// Instanciación del objeto
$estudiante1 = new Estudiante(
    "Reyna Yamileth Perez Martinez",
    "A001",
    "Ingeniería en Sistemas",
    8.5
);

// Mostrar información inicial
$estudiante1->mostrarInformacion();

echo "<strong>Actualizando promedio...</strong><br><br>";

// Actualizar promedio
$estudiante1->actualizarPromedio(9.2);

// Mostrar información actualizada
$estudiante1->mostrarInformacion();

?>
