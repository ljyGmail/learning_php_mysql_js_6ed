<?php
echo '<a href="index.html">Index</a><br><br>';

// # Terminology

// # Declaring a Class
/*
$object = new User;
print_r($object);
echo '<br>';

class User 
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}
*/

// # Creating an Object
/*
$temp = new User('name', 'password');
print_r($temp);
echo '<br>';

// # Accessing Objects
$object = new User;
print_r($object); echo "<br>";

$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo "<br>";
$object->save_user();
*/

// # Cloning Objects
/*
$object1 = new User();
$object1->name = "Alice";
$object2 = $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

// Cloning an obejct
$object1 = new User();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name . "<br>";
echo "object2 name = " . $object2->name . "<br>";

class User
{
    public $name;
}
*/

// # Constructors
/*
class User
{
    function __construct($param1, $param2)
    {
        // Constructor statements go here
    }
}
*/

// # Destructors
/*
class User
{
    function __destruct()
    {
        // Destructor code goes here
    }
}
*/

// # Declaring Properties
/*
$object1 = new User();
$object1->name = "Alice";

echo $object1->name;
echo "<br>";

class User {}
*/

/*
class Test
{
    public $name = "Paul Smith"; // Valid
    public $age = 42; // Valid
    // public $time = time(); // Invalid - calls a function
    // public $score = $level * 2; // Invalid - uses an expression
}
*/

// # Declaring Constants
/*
Translate::lookup();
echo "<br>";

class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;
    // ...

    static function lookup()
    {
        echo self::SPANISH;
    }
}
*/

// # Property and Method Scope
/*
class Example
{
    var $name = "Michael"; // Same as public but deprecated
    public $age = 23; // Public property
    protected $usercount; // Protected property

    private function admin() // Private method
    {
        // Admin code goes here
    }
}
*/

// # Static Methods
/*
User::pwd_string();
echo "<br>";

class User
{
    static function pwd_string()
    {
        echo "Please enter your password";
    }
}

// # Static Properties
$temp = new Test();

echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>";

class Test
{
    static $static_property = "I'm static";

    function get_sp()
    {
        return self::$static_property;
    }
}
*/

// # Inheritance
/*
$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";
$object->display();

class User
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}

class Subscriber extends User
{
    public $phone, $email;

    function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Email: " . $this->email . "<br>";;
    }
}
*/

$object = new Son;
$object->test();
$object->test2();

class Dad
{
    function test()
    {
        echo "[Class Dad] I am your Father<br>";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] I am Luke<br>";
    }

    function test2()
    {
        parent::test();
    }
}

// ## Subclass constructors
$object = new Tiger();

echo "Tigers have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->stripes;

class Wildcat
{
    public $fur; // Wildcats have fur

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes; // Tigers have stripes

    function __construct()
    {
        parent::__construct(); // Call parent constructor first
        $this->stripes = "TRUE";
    }
}

// ## Final methods
class User
{
    final function copyright()
    {
        echo "This class was written by Joe Smith";
    }
}