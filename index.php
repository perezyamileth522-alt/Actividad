<?php
// =========================================
// Actividad Formativa 3 - Herencia
// Aplicación en PHP - Gestión de Estudiantes
// Autora: Reyna Yamileth Perez Martinez
// =========================================

// ==========================
// CLASE BASE
// ==========================
class Estudiante {

    // Atributos protegidos para permitir herencia
    protected $nombre;
    protected $matricula;
    protected $carrera;
    protected $promedio;

    // Constructor
    public function __construct($nombre, $matricula, $carrera, $promedio) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
        $this->promedio = $promedio;
    }

    // Método base
    public function mostrarInformacion() {
        echo "<h3>Información del Estudiante</h3>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Carrera: " . $this->carrera . "<br>";
        echo "Promedio: " . $this->promedio . "<br>";
    }

    // Método para actualizar promedio
    public function actualizarPromedio($nuevoPromedio) {
        $this->promedio = $nuevoPromedio;
    }
}

// ==========================
// CLASE DERIVADA 1
// ==========================
class EstudianteLicenciatura extends Estudiante {

    private $semestre;

    public function __construct($nombre, $matricula, $carrera, $promedio, $semestre) {
        parent::__construct($nombre, $matricula, $carrera, $promedio);
        $this->semestre = $semestre;
    }

    // Sobrescritura del método
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Semestre: " . $this->semestre . "<br><br>";
    }
}

// ==========================
// CLASE DERIVADA 2
// ==========================
class EstudiantePosgrado extends Estudiante {

    private $grado;

    public function __construct($nombre, $matricula, $carrera, $promedio, $grado) {
        parent::__construct($nombre, $matricula, $carrera, $promedio);
        $this->grado = $grado;
    }

    // Sobrescritura
    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Grado: " . $this->grado . "<br><br>";
    }
}

// ==========================
// PROGRAMA PRINCIPAL
// ==========================

// Objeto Licenciatura
$est1 = new EstudianteLicenciatura(
    "Reyna Yamileth Perez Martinez",
    "A001",
    "Ingeniería en Sistemas",
    8.5,
    5
);

// Objeto Posgrado
$est2 = new EstudiantePosgrado(
    "Carlos López",
    "P002",
    "Maestría en TI",
    9.0,
    "Maestría"
);

// Mostrar información
echo "<h2>=== Estudiante Licenciatura ===</h2>";
$est1->mostrarInformacion();

echo "<h2>=== Estudiante Posgrado ===</h2>";
$est2->mostrarInformacion();

// Actualización de promedio
echo "<strong>Actualizando promedio...</strong><br><br>";
$est1->actualizarPromedio(9.3);
$est1->mostrarInformacion();

?>
