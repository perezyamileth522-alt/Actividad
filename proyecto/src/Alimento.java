class Alimento extends Producto {
    private String fechaCaducidad;

    public Alimento(String nombre, double precio, int stock, String fechaCaducidad) {
        super(nombre, precio, stock);
        this.fechaCaducidad = fechaCaducidad;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Alimento: " + nombre +
                " | Precio: $" + precio +
                " | Stock: " + stock +
                " | Caducidad: " + fechaCaducidad);
    }
}