class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    public Account (String name, String document) {
        this.name = name;
        this.document = document;
    }

    public function printDataCar()
    {
        echo "name: {$this->name} <br>";
        echo "Documente: {$this->document} <br>";
        parent::printDataCar();
    }

}