public class Main {
    public static void main(String[] args) {

        Producto p1 = new Electronico("Laptop", 15000, 5, 12);
        Producto p2 = new Alimento("Leche", 25, 20, "10/04/2026");
        Producto p3 = new Ropa("Playera", 200, 10, "M");

        p1.mostrarDetalles();
        p2.mostrarDetalles();
        p3.mostrarDetalles();

        p1.vender(2);
        p2.vender(5);
    }
}