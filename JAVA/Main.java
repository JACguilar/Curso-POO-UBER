/* una clade en JAVA se utiliza class Person{} para definir la clase persona */
/* class Person {
    tring name = '';
    void walk() {}
} */

class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");

        UberX uberx = new UberX("AMQ123 ", new Account("Andres Harrera", "Andres123"), "chevrolet", "Sonic");
        uberx.setPassenger(4);
        uberx.printDataCar();

        /*
         * Car car2 = new Car("AW124 ", new Account( "Andrea Herrera", "Andrea124"));
         * car2.passegenger = 3;
         * car2.printDataCar();
         */
    }
}