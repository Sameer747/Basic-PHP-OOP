<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta a="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //=> Intro to OOP
    /*
    OOP stands for Object-Oriented Programming. 
    Object-oriented programming is a core of PHP Programming, which is used for designing a program using classes and objects that 
    contain both data and functions.  
    -Advantages of OOPS
    Programs are faster to execute.
    Better code reusability. 
    Easy to understand code structure. 
    Very easy to partition the work in a project based on objects.
    Easy to make fully reusable programs with less code and less development time. 
    -Disadvantages of OOPS
    OOPS cannot be applied everywhere as it is not a universal language.
    Need to have a good understanding of classes and objects to apply OOPS. 
    It takes a lot of effort to create. 
    It is slower than other programs.
    OOPS programs are large in size when compared to normal programs
    */

    /*
    Classes:
    Classes are the blueprint of objects. 
    Classes hold their own data members and member functions, which can be accessed and used by creating an instance of that class. 
    In PHP class is defined using the class keyword, followed by the a of classes and curly braces ({}).
    */
    class Employee
    {
        // Properties
        public $a;
        public $sura;

        // Methods
        function set_a($a)
        {
            $this->a = $a;
        }
        function get_a()
        {
            return $this->a;
        }
    }

    /*
    Objects:
    Object is an instance of class. 
    An Object is a self-contained component which consists of methods and properties to make a particular type of data useful. 
    We can create multiple objects from a class and each object will have all the properties and methods defined in the class, 
    but they will have different property values. 
    To declare an object in PHP we use the new keyword. 
    */
    $emp1 = new Employee();
    $emp2 = new Employee();
    $emp1->set_a("OBJECT: Sameer Mohsin");
    $emp2->set_a("OBJECT: Ameer Hamza");
    echo $emp1->get_a() . "<br>";
    echo $emp2->get_a() . "<br>";

    //=> Access Modifires
    /*
    In the PHP programming language, every property and method of a class can have access modifiers which control their 
    accessibility in the entire program. 
    There are three access modifiers in PHP:
    */
    /*
    Public:
    Public property or method can be accessed by any code whether that code is inside or outside of that class. 
    If a property or method is declared public, then it can be accessed anywhere from the code.     
    */
    class Company
    {
        public $a;
    }

    $em1 = new Company();
    echo $em1->a = 'PUBLIC: Sameer Mohsin <br>';
    /*
    Protected
    Protected property or method can only be accessed within the class and by the classes derived from that class.
    */
    class ParentClass
    {
        protected $parentMsg = "protected parent attribute<br>";
        protected function parentDisplay()
        {
            echo "protected parent method<br>";
            echo $this->parentMsg;
        }
    }
    class ChildClass extends ParentClass
    {
        protected $childMsg = "Protected Child attribute.<br>";
        public function childDisplay()
        {
            echo "Public Child method to display protected parent members:<br>";
            $this->parentDisplay();
        }
    }
    $child = new ChildClass();
    $child->childDisplay();
    /*
    Private
    The Private property or method can only be accessed within the class. If it is called outside of the class,
    then it will throw an error. 
    */
    class Messi
    {
        public $salary;

        private function set_salary($n)
        { // a private function
            $this->salary = $n;
        }
    }
    $emp1 = new Messi();
    //   $emp1->set_salary('300'); It will throw error as It can not Access the Private Function

    //=> Constructor & Destructor
    /*
    Constructor:
    In PHP, a constructor allows you to initialize an object's properties upon the creation of the object. 
    The constructor function starts with two underscores (__) and if we create a __construct() function, 
    then PHP will automatically call this function when we create an object from a class. 
    */
    class ExampleConstructor
    {
        public $a;
        public $b;

        function __construct($a, $b)
        {
            echo "CONSTRUCTOR: " . $this->a = $a . $this->b = $b;
        }
    }
    $ec = new ExampleConstructor("Sameer", "Mohsin <br>");
    // echo $ec->get_a();
    /*
    Destructor:
    Destructor is a special member function which is exactly the reverse of the constructor method. 
    When it is called an instance of the class is deleted from the memory. 
    The Destructor function starts with two underscores (__) and if we create a __destruct() function, 
    then PHP will automatically call this function at the end of the script. 
    */
    class ExampleDestructor
    {
        public $a;
        public $b;

        function __construct($a, $b)
        {
            $this->a = $a;
            $this->b = $b;
        }
        function __destruct()
        {
            echo "DESTRCUTOR: Employee name is {$this->a} {$this->b}";
            //    echo "<br>";
        }
    }
    $ed = new ExampleDestructor("Ali", "Azeem <br>");

    //=> Inheritance & Final
    /*
    Inheritance:
    When a class is defined by inheriting the existing function of a parent class then it is called inheritance. 
    Here child class will inherit all or a few member functions and variables of a parent class. 
    We can define an inherited class by using the extends keyword. 
    Inheritance has three types Single, Multiple and Multilevel Inheritance but PHP only supports single inheritance, 
    where only one class can be derived from a single parent class.
    */
    class exm
    {
        public function func1()
        {
            echo "example of inheritance  ";
        }
    }
    class exm1 extends exm
    {
        public function func2()
        {
            echo "in php <br>";
        }
    }
    $obj = new exm1();
    $obj->func1();
    $obj->func2();
    /*
    Final Keyword
    The final keyword can be used to prevent method overriding or to prevent class inheritance. 
    */
    final class Hello
    {
        function say()
        {
            echo "final class";
        }
    }
    # This will result in error as the final keyword is used
    // class Hello2 extends Hello{
    //     function say()  {
    //         echo "this class extnds final class";
    //     }
    // }

    //=> Interface
    /*
    Interfaces permit users to programmatically define the public methods that a class should implement without bothering about the 
    implementation complexities and details of any particular method. 
    Interfaces make it easy to use different classes in the same way. 
    When one or more classes use the same interface, it is referred to as "polymorphism" in PHP.
    Interfaces are declared with interface keyword. 
    */
    interface Human
    {
        public function makeSound();
    }

    class Programmer implements Human
    {
        public function makeSound()
        {
            echo "Hello World <br>";
        }
    }
    $human = new Programmer();
    $human->makeSound();

    //=> Abstract Classes
    /*
    Abstract classes and methods are when the parent class has a named method but the child class needs to complete the task.
    An abstract class is a class that contains at least one abstract method. 
    Abstract methods are methods that are declared in your code but not implemented.
    We can define an Abstract class or method with the abstract keyword.
    When inheriting from an abstract class, methods in subclasses must be defined with the same name and with the same or 
    less restrictive access modifiers. So if an abstract method is defined as protected, the subclass's method must be either 
    protected or defined as public, but not private. Also, the required arguments must be of the same type and number. However, 
    subclasses can specify additional optional arguments.
    So, when a child class is inherited from an abstract class, we have the following rules:
    The child class method must be defined with the same name.
    The child class method must be defined with the same or a less restrictive access modifier
    The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */
    // Parent class
    abstract class Bike
    {
        public $name;
        public function __construct($name)
        {
            $this->name = $name;
        }
        abstract public function intro(): string;
    }
    // Child classes
    class Yamaha extends Bike
    {
        public function intro(): string
        {
            return "I'm a $this->name!";
        }
    }
    class splendor extends Bike
    {
        public function intro(): string
        {
            return "I'm a $this->name!";
        }
    }
    class Vespa extends Bike
    {
        public function intro(): string
        {
            return "I'm a $this->name!";
        }
    }
    // Create objects from the child classes
    $yamaha = new yamaha("Yamaha");
    echo $yamaha->intro();
    echo "<br>";

    $splendor = new splendor("Splendor");
    echo $splendor->intro();
    echo "<br>";

    $vespa = new vespa("Vespa <br>");
    echo $vespa->intro();

    //=> Class Constants
    /*
    Constants are like variables except that once they are defined, they cannot be changed. 
    If we need to define some constant data within a class, we need to use class constants. 
    Class constants are case-sensitive and they can be declared inside a class with the const keyword. 
    We can also access a constant outside of a class by using the class_name followed by :: operator with constant name. 
    */
    class Greet
    {
        const GREETING_MSG = "Hey!!<br>";
    }
    echo Greet::GREETING_MSG;
    # We can also use the self keyword to access the constant inside the class.
    class Hel
    {
        const New_Message = "Did I leave the Stove on?<br>";
        public function ByeWorld()
        {
            echo self::New_Message;
        }
    }
    $helloworld = new Hel();
    $helloworld->ByeWorld();

    //=> Traits:
    /*
    PHP language only supports single-level inheritance where a child class can inherit only from one single parent. 
    If we need to inherit multiple behaviours from a class, then we can use Traits to solve this. 
    Traits are used to declare methods that can be used in multiple classes which can have any access modifier 
    (public, private, protected). Traits can also have normal methods and abstract methods that can be used in multiple classes.
    Traits are declared with the trait class and to use a train in a class we need to use the use keyword.
    */
    trait message1
    {
        public function msg1()
        {
            echo "give me cheeseburgers <br>";
        }
    }
    class Welcome
    {
        use message1;
    }
    $obj = new Welcome();
    $obj->msg1();

    //=> Static Methods & Properties
    /*
    Static Methods
    To access a static method we need to use the class name followed by a double colon (::), and the method name.
    */
    class greeting1
    {
        public static function welcome()
        {
            echo "Hello Sam!<br>";
        }
    }
    // Call static method
    greeting1::welcome();
    /* 
    A static method can be accessed from a method in the same class using the self keyword followed by a double colon (::), 
    and the method name.
    */
    class greeting2
    {
        public static function welcome()
        {
            echo "Hello Bruv!<br>";
        }
        public function __construct()
        {
            self::welcome();
        }
    }
    new greeting2();
    /*
    Static Properties:
    Static properties can be accessed directly without creating an instance of a class. 
    Static properties can be declared by using the static keyword. 
    To access a static property we need to write the class name followed by a double colon (::), and the property name.\
    */
    class pi
    {
        public static $value = "Static Properties: " . 3.14 . "<br>";
    }
    // Getting static property
    echo pi::$value;
    /*
    A static method can be accessed from a method in the same class using the self keyword followed by a double colon (::), 
    and the method name.
    */
    class pi2
    {
        public static $value = 3.14159;
        public function staticValue()
        {
            return "Static Properties: " . self::$value . "<br>";
        }
    }
    $pi2 = new pi2();
    echo $pi2->staticValue();
    /*
    If we need to call a static property from a child class, we can use the parent keyword inside the child class. 
    */
    class pi3
    {
        public static $value = 3.14;
    }
    class x extends pi3
    {
        public function xStatic()
        {
            return parent::$value;
        }
    }
    // Get value of static property directly via child class
    echo  "Static Property from Child class: " . x::$value . "<br>";

    ?>
</body>

</html>