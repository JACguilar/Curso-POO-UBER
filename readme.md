# Curso de Programacion Orientada a Objetos

En este curso aprendi muchos conceptos y generalidades de la programacion orientada a objetos.

## Fundametos de POO

### Existen 4 pilares sobre los que fundamenta este paradigma.

* Herencia
* Abstraccion
* Encapsulamiento
* Polimorfismo

### que son Objetos?

Es el elemento principal de la programación orientada a objetos y alrededor del cual gira este paradigma.

Se trata de un ente abstracto usado en programación que permite separar los diferentes componentes de un programa, simplificando así su elaboración, depuración y posteriores mejoras.

Dentro de la sitaxis se comprenden como los entes de una Clase.


#### Clase

Podemos definir informalmente una clase como una plantilla (o esqueleto o plano) a partir de la cual se crean los objetos.

aqui es donde Definimos un Objeto.

#### Metodos

funcionalidades que un objeto es capaz de realizar.

#### Atributos

son variables que codifican el estado de un objeto.

#### Constructor

El constructor se llama de forma automática cuando se crea un objeto para situarlo en memoria e inicializar los atributos declarados en la clase. En la mayoría de lenguajes, el constructor tiene las siguientes características:
1) Normalmente, el nombre del constructor es el mismo que el de la clase.
2) El constructor no tiene tipo de retorno, ni siquiera void.
3) Puede recibir parámetros (o también llamados argumentos) con el fin de inicializar los atributos de la clase para el objeto que se está creando en ese momento.

#### Destructor

El destructor es el método que sirve para eliminar un objeto concreto definitivamente de memoria. Hay que tener en cuenta que:
1) No todos los lenguajes necesitan implementar un método destructor, este es el caso de Java y C#.
2) Por norma general, una clase tiene un solo destructor.
3) En algunos lenguajes no tiene tipo de retorno, ni siquiera void. En otros, generalmente, tiene void como tipo de retorno.
4) No recibe parámetros.
5) En general suele ser público.
La manera en la que se declara el método destructor varía entre lenguajes. Por ejemplo, en C++ y C#, el nombre del destructor es el mismo que el de la clase precedido por el símbolo ~, por ejemplo ~Persona().
En Java, en cambio, se usa el método especial finalize() que no devuelve nada (en este caso, sí tiene tipo de retorno, concretamente void). El compilador de Java no obliga a implementar el método finalize(). Así pues, solo se debe codificar si realmente es necesario.

#### UML (Unified Modeling Language).

Es un lenguaje conceptual, por lo que el diagrama de clases debería ser lo más independiente posible del lenguaje de programación a utilizar en el futuro.

#### En este curso se implemento en los Lenguajes 

* JAVA
* JavaScript
* PYTHON
* PHP