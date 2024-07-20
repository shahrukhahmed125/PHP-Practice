<?php
// ----- namepsace ----- //

// require 'show.php';
// require 'result.php';

// echo "hi";
// $a = new B1\Abc();
// $a->show();


            // --- Class --- //

            // class Fruits
            // {
            //     public $name;
            //     public $color;

            //     function set_name($name)
            //     {
            //         $this->name = $name;
            //     }

            //     function get_name()
            //     {
            //         return $this->name;
            //     }

            //     function set_color($color)
            //     {
            //         $this->color = $color;
            //     }

            //     function get_color()
            //     {
            //        return $this->color;
            //     }
            // }

            // --- Object of the class --- //

            // $apple = new Fruits();
            // $banana = new Fruits();

            // --- set the value in it --- //

            // $apple->set_name('apple');
            // $apple->set_color('red');

            // $banana->set_name('banana');
            // $banana->set_color('yellow');

            // --- echo the value in it --- //

            // echo $apple->get_name();
            // echo " : ";
            // echo $apple->get_color();
            // echo "<br>";
            // echo $banana->get_name();
            // echo " : ";
            // echo $banana->get_color();

            // check the variable belongs to this class
            // var_dump($apple instanceof Fruits);


            // ------ oop constructor -------- //
            
            // class Cars
            // {
            //     public $name;
            //     public $model;

            //     function __construct($name, $model)
            //     {
            //         $this->name = $name;
            //         $this->model = $model;
            //     }

            //     function get_name()
            //     {
            //         return $this->name;
            //     }
            //     function get_model()
            //     {
            //         return $this->model;
            //     }
            // }

            // the constructor allows the initailize the object and it also execute the object whenever a new object is instantiated.

            // $car = new Cars('BMW', 2023);

            // echo $car->get_name();
            // echo $car->get_model();

            // class Employee
            // {
            //     public $name;
            //     public $salary;

            //     function __construct()
            //     {
            //         echo "This is a constructor.";
            //     }
            // }

            // $a = new Employee();

            // this code will run cause of constructor
            // ye tu hoga

            // class Book
            // {
            //     public $title;
            //     public $author;
            //     public $pages;

            //     function __construct($title, $author, $pages)
            //     {
            //         $this->title = $title;
            //         $this->author = $author;
            //         $this->pages = $pages; 
            //     }

            //     function get_title()
            //     {
            //         return $this->title;
            //     }

            //     function get_author()
            //     {
            //         return $this->author;
            //     }

            //     function get_pages()
            //     {
            //         return $this->pages;
            //     }

            // }

            // $book = new Book('PHP Fundamentals', "Jane Deo", 3000);
            // echo $book->get_title(). "<br>";
            // echo $book->get_author(). "<br>";
            // echo $book->get_pages(). "<br>";

            // class User {
            //     public $name;
            //     public $email;
            //     public $role;
            
            //     public function __construct($name, $email, $role = 'member') {
            //         $this->name = $name;
            //         $this->email = $email;
            //         $this->role = $role;
            //     }

            //     function get_name()
            //     {
            //         return $this->name;
            //     }

            //     function get_email()
            //     {
            //         return $this->email;
            //     }

            //     function get_role()
            //     {
            //         return $this->role;
            //     }
            // }
            
            // $user = new User('shahrukh', "shahrukh@gmail.com");
            // echo $user->get_name(). "<br>";
            // echo $user->get_email(). "<br>";
            // echo $user->get_role(). "<br>";

            /// ------ oop php destructor -------- ///

            // Destructor will be called at the end of the script.

            // class Employee
            // {
            //     public $name;
            //     public $salary;

            //     function __destruct() // can be run without contructor
            //     {
            //         echo "I am destructor.";
            //     }


            // }

            // $des = new Employee();

            // class Car
            // {
            //     public $name;

            //     function __construct($name)
            //     {
            //         $this->name = $name;
            //     }
            //     function get_name()
            //     {
            //         return $this->name;
            //     }
            //     function __destruct()
            //     {
            //         echo "This is a destructor " . $this->name;
            //     }
            // }

            // $bro = new Car("BMW");

            // echo $bro->get_name();
            // echo "hello world";

            // ------ Access Modifiers ----- //

            // 1. public -> by default properties and methods are public 
            // 2. private -> can only be access with class and only can called through a public functions in the class. 
            // 3. protected -> can be access from within the class and derived class.


            // class Emp{
            //     // public $name = "shahrukh";
            //     private $name = "shahrukh";

            //     function name()
            //     {
            //         echo"$this->name";
            //     }
            // }

            // $a = new Emp();
            // // $a->name;  // this will throw error
            // $a->name();

            // ------ Inheritence ----- //

            // inheritence overriding the function/ method in the inheret class is possible.

            // class Fruit /// parent class
            // {
            //     public $name;
            //     public $color;

            //     public function __construct($name, $color)
            //     {
            //         $this->name = $name;
            //         $this->color = $color;
            //     }

            //     public function intro()
            //     {
            //         echo "The fruit is {$this->name} and the color is {$this->color}";
            //     }
            // }

            // class Apple extends Fruit  // apple is a child class extends keyword is used to add parent class.
            // {
            //     public function message()
            //     {
            //         echo"Am i a fruit or a berry? ";
            //     }
            // }

            // $apple = new Apple("Apple", "Red");
            // $apple->message();
            // $apple->intro();

            // class Cars
            // {
            //     public $name;
            //     public $color;

            //     public function __construct($name, $color)
            //     {
            //         $this->name = $name;
            //         $this->color = $color;
            //     }

            //     protected function intro()
            //     {
            //         echo "The Car is {$this->name} and the color is{$this->color} <br>";
            //     }
            // }


            // class bmw extends Cars{

            //     public function msg()
            //     {
            //         echo"Message for car. <br>";
            //         $this->intro(); /// protected can only be access through functions in the inhert class.
            //     }
            // }

            // $car = new bmw("BMW","Black");
            // $car->msg();

            // final keyword prevent inheritence and overriding
            // class Fruit {
            //     final public function intro() {
            //       // some code
            //     }
            //   }
              
            //   class Strawberry extends Fruit {
            //     // will result in error
            //     public function intro() {
            //       // some code
            //     }
            //   }

            // const pi = 3.14159;
            // $r = 5;
            // $re = pi*$r**2;
            // echo $re;

            // class area{
            //     const pi = 3.14159;

            //     public function pi_v()
            //     {
            //         echo"from the function using self keyword<br> ". self::pi;
            //         // Or, we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here
            //     }
            // }

            // // echo area::class;
            // echo area::pi;  // We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here

            // $a = new area();
            // $a->pi_v();

            // ------ Abstract class and method ------//
            // An abstract class is a class that cannot be instantiated on its own and is meant to be inherited by other classes.
            // An abstract class is a class that contains at least one abstract method. 
            // abstract class Animal
            // {
            //     // abstract method with no body
            //      abstract public function someMethod2($name, $color); 
            //      abstract public function someMethod3() : string;  // returns string only
            //     abstract function makeSound(); // override is neccessary for using this method in child class and Cannot have a body (no implementation).

            //     //concrete method
            //    public function sleep() // just like regular functions in php
            //     {
            //         echo "Zzzzz...";
            //     }
            // }

            // class Dog extends Animal
            // {
            //     // Implementing the abstract method
            //     public function makeSound()
            //     {
            //         echo "woof!";
            //     }
            // }

            // $dog = new Dog();
            // $dog->makeSound();
            // $dog->sleep();

            // ------ Interfaces ----- //

            // Interfaces cannot have properties
            // All interface methods must be public
            // All methods in an interface are abstract means override is neccessary for using this method in child class
            // When one or more classes use the same interface, it is referred to as "polymorphism".

            // interface Animal
            // {
            //    public function makeSound(); // interfaces cannot contain any method bodies; they can only declare methods
            // }

            // class Cats implements Animal
            // {
            //     public function makeSound()
            //     {
            //         echo"Meow!";
            //     }
            // }

            // $cat = new Cats();
            // $cat->makeSound();

            // interface Animal
            // {
            //    public function makeSound();
            // }

            // class Cats implements Animal
            // {
            //     public function intro()
            //     {
            //         echo"The Cat: ";
            //     }
            //     public function makeSound()
            //     {
            //         echo"Meow!<br>";
            //     }
            // }

            // class Dogs implements Animal
            // {
            //     public function intro()
            //     {
            //         echo"The Dog: ";
            //     }
            //     public function makeSound()
            //     {
            //         echo "Woof!<br>";
            //     }
            // }

            // class Mouse implements Animal
            // {
            //     public function intro()
            //     {
            //         echo"The Mouse: ";
            //     }
            //     public function makeSound()
            //     {
            //         echo "Sqeak!<br>";
            //     }
            // }

            // $cat = new Cats();
            // $dog = new Dogs();
            // $mouse = new Mouse();

            // $animal_Sound = array($cat, $dog, $mouse);

            // foreach($animal_Sound as $sound)
            // {
            //     $sound->intro();
            //     $sound->makeSound();
            // }

            // ------ PHP Triats ------ //

            // traits are a mechanism for code reuse that allows you to include methods in multiple classes.
            // Traits help solve the problem of single inheritance in PHP by enabling you to share methods between classes without using inheritance.

            // trait msg1
            // {
            //     public function msg_1()
            //     {
            //         echo"OOP is fun!";
            //     }
            // }

            // class welcome{
            //     use msg1;
            // }


            // $wel = new welcome();
            // $wel->msg_1();

            // ----- Static method ----- //

            // Static methods can be called directly - without creating an object of the class first.

            // Static methods are declared with the static keyword:

            // class welcome{
            //     public static function greet()
            //     {
            //         echo "Hello!";
            //     }
            // }

            // welcome::greet();

            // A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon

            // class welcome
            // {
            //     public static function greet()
            //     {
            //         echo"Hello!";
            //     }

            //     public function __construct()
            //     {
            //         self::greet();
            //     }
            // }

            // new welcome();

            // Static methods can also be called from methods in other classes. To do this, the static method should be public.
            // To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

            // Protected Static Methods Accessible within the class that defines them and any subclasses. Not accessible from outside the class hierarchy.
            // Protected Static Methods Accessible within the class that defines them and any subclasses. Not accessible from outside the class or by subclasses.

            // class A
            // {
            //     public static function greet()
            //     {
            //         echo "Hello fron A class";
            //     }
            // }

            // class B 
            // {
            //     public function msg()
            //     {
            //         A::greet();
            //     }
            // }

            // $obj = new B();
            // $obj->msg();

            // class A
            // {
            //     public static function greet()
            //     {
            //         echo "Hello fron A class";
            //     }
            // }

            // class B extends A
            // {
            //     public function msg()
            //     {
            //         A::greet(); // both ways are true to call static method.
            //         parent::greet(); // should prefer this for best practice.
            //     }
            // }

            // $obj = new B();
            // $obj->msg();

            // ----- Static Properties ----- //

            // class pi
            // {
            //     public static $value = 3.14159;
            // }

            // echo pi::$value;

            // calling in a method in same class 

            // class pi
            // {
            //     public static $value = 3.14159;

            //     public function show_val()
            //     {
            //         return self::$value;
            //     }
            // }

            // $p = new pi();
            // // echo pi::$value;
            // echo $p->show_val();

        //     class A
        //     {
        //         public static $value = 3.5;
        //     }

        //     class B extends A
        //     {
        //         public function msg()
        //         {
        //             return parent::$value;
        //         }
        //     }
        // //    echo B::$value;
        //     $obj = new B();
        //     echo $obj->msg();

        /// ----- Iteraable ----- ///

        // function getIterable():iterable
        // {
        //     return ["a","b","c"];
        // }

        // $a = getIterable();

        // foreach($a as $a)
        // {
        //     echo $a."<br>";
        // }
        

        // function myIter(iterable $it)
        // {
        //     foreach($it as $item)
        //     {
        //         echo"{$item} <br>";
        //     }
        // }

        // $arrr = [1,2,3];
        // myIter($arrr);

        // ----- Iterators ----- //

        // Any object that implements the Iterator interface can be used as an argument of a function that requires an iterable

        //An iterator contains a list of items and provides methods to loop through them. It keeps a pointer to one of the elements in the list. Each item in the list should have a key which can be used to find the item.

        // An iterator must have these methods:

        // current() - Returns the element that the pointer is currently pointing to. It can be any data type
        // key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
        // next() Moves the pointer to the next element in the list
        // rewind() Moves the pointer to the first element in the list
        // valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case

        // class Myclass implements Iterator
        // {
        //     private $items = [];
        //     private $pointer = 0;

        //     public function __construct($item)
        //     {
        //         $this->items = array_values($item);
        //     }

        //     public function current():mixed
        //     {
        //         return $this->items[$this->pointer];
        //     }

        //     public function key():mixed
        //     {
        //         return $this->pointer;
        //     }

        //     public function next():void
        //     {
        //         $this->pointer++;
        //     }

        //     public function rewind(): void
        //     {
        //         $this->pointer = 0;
        //     }

        //     public function valid(): bool
        //     {
        //         return $this->pointer < count($this->items);
        //     }
        // }

        // // function that uses iterables

        // function print_It(iterable $it)
        // {
        //     foreach($it as $items)
        //     {
        //         echo"{$items} <br>";
        //     }
        // }


        // // use the iterator as an iterable

        // $iterator = new Myclass([1,2,3]);
        // print_It($iterator);

        // ----- simple XML parse PHP ----- //

        $myXMLData =
            "<?xml version='1.0' encoding='UTF-8'?>
            <note>
            <to>Tove</to>
            <from>Jani</from>
            <heading>Reminder</heading>
            <body>Don't forget me this weekend!</body>
            </note>"
        ;

        $xml = simplexml_load_string($myXMLData) or die("Error: Cannot create object");

        print_r($xml);