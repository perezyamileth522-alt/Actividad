class Ropa extends Producto {
    private String talla;

    public Ropa(String nombre, double precio, int stock, String talla) {
        super(nombre, precio, stock);
        this.talla = talla;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Ropa: " + nombre +
                " | Precio: $" + precio +
                " | Stock: " + stock +
                " | Talla: " + talla);
    }
}   