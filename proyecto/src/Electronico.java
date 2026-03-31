class Electronico extends Producto {
    private int garantiaMeses;

    public Electronico(String nombre, double precio, int stock, int garantiaMeses) {
        super(nombre, precio, stock);
        this.garantiaMeses = garantiaMeses;
    }

    @Override
    public void mostrarDetalles() {
        System.out.println("Electrónico: " + nombre +
                " | Precio: $" + precio +
                " | Stock: " + stock +
                " | Garantía: " + garantiaMeses + " meses");
    }
}
