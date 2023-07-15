<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Practice PHP</title>
</head>

<body>
    <h1>Learning PHP</h1>
    <!-- starting tag php scripts -->
    <?php
    //=> Basic Syntax PHP 
    // PHP code goes here
    #displays output on php
    echo "Hello World!" . '<br>';

    //=> PHP Comments
    // This is a single-line comment
    # This is also a single-line comment
    /*
    This is a
    multiple line
    Comment.
    */

    //=> Variables in PHP
    /*
    In PHP, we don’t need to declare the variable type explicitly. The type of variable is determined by the value it stores. There are some important things to know about variables in PHP.
    All variables should be denoted with a Dollar Sign ($)
    Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.
    Variable names can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
    Variables must start with a letter or the underscore “_” character.
    Variables are case sensitive
    Variable names cannot start with a number.
    */
    $txt = "Hello world!";  # Type String
    $x = 5;                 # Type int
    $y = 10.5;              # Type Float

    //=> Variables Scope
    /*
    The scope of the variable is the area within which the variable has been created. 
    Based on this a variable can either have a local scope or a global scope or a static scope in PHP.
    */
    /*
    GLOBAL VARAIBLE:
    A variable which was created in the main body of the code and that can be accessed anywhere in the program is called Global Variable. 
    Global variables can be directly accessed or used in or outside of a function with GLOBAL keyword before variable.
    However, we can also call them without the global keyword.
    */
    $name = "Sameer Mohsin";
    function globalVar()
    {
        global $name; #global variable used via global keyword.
        echo "Variable inside the function using global keyword is: " . $name . '<br>';
    }
    globalVar();
    echo "Varaible outside the function is: " . $name . '<br>';
    /*
    LOCAL VARAIBLE:
    A local variable is created within a function and can be only used inside the function. 
    This means that these variables cannot be accessed outside the function, as they have local scope.
    */
    function capital()
    {
        $city = "Karachi"; #local variable used inside the function only
        echo "Capital of Pakistan is: " . $city;
    }
    capital(); #calling the function
    echo $capital; #using local variable outside the function will cause error.
    /*
    STATIC VARIABLE:
    PHP has a feature that deletes the variable once it has finished execution and frees the memory.
    When we need a local variable which can store its value even after the execution, we use the static keyword before it and the variable is called static variable. 
    These variables only exist in a local function and do not get deleted after the execution has been completed. 
    */
    function StaticNonstaicVarTest()
    {
        static $num1 = 4; #local static variable.
        $num2 = 6; #local non-static variable.
        $num1++; #output will be 5 after first function call and then 6 after second function call.
        $num2++; #output will be 7 after 1st & 2nd function call/execution as it is non-static variable.
        echo "Static: " . $num1 . '<br>';
        echo "Non-Static: " . $num2 . '<br>';
    }
    StaticNonstaicVarTest();
    StaticNonstaicVarTest();

    //=> PHP DataTypes
    #String
    $str = "This is a string.";
    echo $str . '<br>';
    #Integer
    $int = 5;
    echo "Ineger value is: " . $int . '<br>';
    #Float
    $float = 5.5;
    echo "Float value is: " . $float . '<br>';
    #Boolean
    $true = true;
    $false = false;
    echo "Boolean value is: " . $true . " and " . $false . '<br>';
    #Array
    $array = array("Sameer", "James", "Frank", array(1, 2, 3));
    echo "The value of Array is: ";
    $a = var_dump($array); #The PHP var_dump() function returns the data type and value
    #Null
    $null = null;
    echo "The value is: " . $null . '<br>';

    //=> PHP Conditional Statements
    #if-else statement 
    $num = 1;
    if ($num <= 10 && $num >= 1) {
        echo "$num < 10" . '<br>';
    } else if ($num > 10) {
        echo "$num > 10" . '<br>';
    } else {
        echo "$num is 0" . '<br>';
    }
    #switch statement
    $i = readline("Enter: ");
    switch ($num) {
        case 0:
            echo "$num equals 0 <br>";
            break;
        case 1:
            echo "$num equals 1 <br>";
            break;
        case 2:
            echo "$num equals 2 <br>";
            break;
        default:
            echo "$i is not equal to 0, 1 or 2 <br>";
    }

    //=> PHP Iterative Statements
    /*
    WHILE LOOP:
    The While loop in PHP is used when we need to execute a block of code again and again based on a given condition. 
    If the condition never becomes false, the while loop keeps getting executed. Such a loop is known as an infinite loop. 
    */
    $x = 10;
    while ($x <= 20) {
        echo "The no is: $x <br>";
        $x++;
    }
    /*
    DO WHILE LOOP:
    The do-while loop is similar to a while loop except that it is guaranteed to execute at least once.
    After executing a part of a program for once, the rest of the code gets executed based on a given boolean condition.
    */
    do {
        echo "The no is: $x <br>";
    } while ($x <= 9);
    /*
    FOR LOOP:
    The for loop is used to iterate a block of code multiple times. 
    */
    for ($i = 1; $i <= 10; $i++) {
        echo " $i ";
    }
    /*
    FOR EACH LOOP:
    The foreach loop in PHP can be used to access the array indexes in PHP. It only works on arrays and objects. 
    */
    echo "Welcome to the world of foreach loops <br>";
    $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
    foreach ($arr as  $value) {
        echo "$value <br>";
    }

    //=> Function Basics
    function helloWorld()
    {
        echo "This is a function <br>"; #code to write here for logic
    }
    helloWorld(); #calling a function

    //=> Function Arguments
    /*
    1. Call by Value
    In Call by Value, the value of a variable is passed directly. 
    This means if the value of a variable within the function is changed, it does not get changed outside of the function. 
    */
    function incr($i)
    {
        $i++;
        echo "Call by value: Value inside the func: $i <br>";
    }
    $i = 5;
    incr($i);
    echo "Call by value: Value outside the func: $i <br>";
    /*
    2. Call by Reference
    In call by reference, the address of a variable (their memory location) is passed. In the case of call by reference, we prepend an ampersand (&) to the argument name in the function definition. 
    Any change in variable value within a function can reflect the change in the original value of a variable.
    */
    function inc(&$i)
    {
        $i++;
        echo "Call by refernce: Val inside func: " . $i . "<br>";
    }
    $i = 5;
    inc($i);
    echo "Call by reference: Val outside func is: " . $i . '<br>';

    //=> Arrays
    /*
    An array is a collection of data items of the same data type. And it is also known as a subscript variable.
    There are three different kinds of arrays. 
    */
    /*
    1. Numeric/Index Array
    These are arrays with a numeric index where values are stored and accessed in a linear fashion. 
    */
    $indexArray = array("Toyota", "BMW", "Audi");
    echo "I like " . $indexArray[0] . " , " . $indexArray[1] . " and " . $indexArray[2] . ".<br>";
    /*
    2. Associative Array
    These are arrays with string as an index where it stores element values associated with key values.
    */
    $age = array("Ben" => "35", "Stokes" => "37", "Jim" => "25");
    echo "Ben is " . $age['Ben'] . " years old.<br>";
    /*
    3. Multidimensional Arrays
    A multidimensional Array is an array containing one or more arrays where values are accessed using multiple indices.
    */
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Audi", 5, 2),
        array("Land Rover", 17, 15)
    );
    echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    
    ?>
    <!-- ending tag php script -->
</body>

</html>