Sistema de Control de Inventarios

*Descripción general
El presente proyecto consiste en la creación de un sistema de control de inventarios desarrollado en Java, aplicando los principios fundamentales de la Programación Orientada a Objetos (POO). Este sistema permite gestionar diversos tipos de productos mediante una estructura clara, reutilizable y fácil de ampliar.

*Propósito
Desarrollar una aplicación que permita administrar distintos productos, haciendo uso de conceptos como herencia, polimorfismo, clases abstractas y sobrescritura de métodos.

*Organización del sistema
El sistema está conformado por una clase principal y varias clases derivadas:

* `Producto` (clase abstracta base)
* `Electronico`
* `Alimento`
* `Ropa`
* `Main` (clase de ejecución)

*Implementación de la herencia

La herencia se utiliza a través de la clase abstracta `Producto`, la cual define atributos generales como nombre, precio y cantidad disponible, así como métodos comunes.

Las clases `Electronico`, `Alimento` y `Ropa` extienden esta clase base, heredando sus características y añadiendo propiedades específicas. Esto permite evitar la repetición de código y mantener una mejor organización.

*Uso del polimorfismo

El polimorfismo se aplica mediante el método `mostrarDetalles()`, el cual es declarado de forma abstracta en la clase `Producto` y redefinido en cada una de las clases derivadas.

Gracias a esto, un mismo método puede comportarse de manera diferente dependiendo del tipo de objeto que lo utilice.

Ejemplo:

```id="0t64e6"
Producto p1 = new Electronico(...);
Producto p2 = new Alimento(...);
```

*Funcionalidades principales

* Gestión de diferentes tipos de productos
* Visualización de información detallada
* Proceso de venta con actualización de inventario
* Uso de una estructura basada en herencia

*Herramientas utilizadas

* Lenguaje de programación: Java
* Entorno de desarrollo: IntelliJ IDEA
* Sistema de control de versiones: Git
* Plataforma de almacenamiento: GitHub

*Ejecución del programa

1. Abrir el proyecto en el entorno de desarrollo
2. Ejecutar la clase principal `Main.java`
3. Visualizar los resultados en la consola

*Estructura del proyecto

```id="3qdfwb"
ProyectoInventario/
│
├── Producto.java
├── Electronico.java
├── Alimento.java
├── Ropa.java
└── Main.java
```
*Ejemplo de salida

```id="3q6lrv"
Electrónico: Laptop | Precio: $15000 | Stock: 5 | Garantía: 12 meses
Alimento: Leche | Precio: $25 | Stock: 20 | Caducidad: 10/04/2026
Ropa: Playera | Precio: $200 | Stock: 10 | Talla: M
Venta realizada. Stock restante: 3
Venta realizada. Stock restante: 15
```

*Temas aplicados

* Programación Orientada a Objetos
* Herencia
* Polimorfismo
* Clases abstractas
* Encapsulamiento

Autor: Reyna Yamileth Perez Martinez

---
