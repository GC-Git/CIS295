<?php
/**
 * Created by PhpStorm.
 * User: Gordon
 * Date: 4/16/2018
 * Time: 11:57 AM
 */
/*


===== FUNCTION SAMPLE =====
function format_names($firstName, $lastName)
{
    $upperFirstName = strtoupper($firstName);
    $upperLastName  = strtoupper($lastName);

    return array($upperFirstName, $upperLastName);
}


===== CLASS SAMPLE =====
class Student
{


    // ----- OBJECT PROPERTIES -----
    // VARIABLE SCOPE
    //  - Public: Properties or Methods that can be accessed from outside the class. This is the default scope when you are implicitly declaring a variable or method the first time.
    //  - Protected: These properties and methods can be referenced only by the object's class methods and those of any subclasses.
    //  - Private: These properties and methods can be referenced only by methods within the same class, not by subclasses.

    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $majorProgram;

    // ----- OBJECT CONSTRUCTOR -----
    public function __construct($arg1, $arg2, $arg3, $arg4)
            {
                $this->firstName    = $arg1;
                $this->lastName     = $arg2;
                $this->dateOfBirth  = $arg3;
                $this->majorProgram = $arg4;
            }

    // ----- GETTER METHODS -----
    public function get_firstName() {
        return $this->firstName; // 'this' refers to the object it is in.
    }

    function get_lastName() {
        return $this->lastName;
    }

    // ----- SETTER METHODS ------
    public function set_firstName($firstName) {
        $this->firstName = $firstName;

        return $this;
    }

    public function set_lastName($lastName) {
        $this->lastName = $lastName;

        return $this;
    }
}

$student = new Student();
print $student->firstName; // Getting an object property. Should usually be encapsulated in a getter function.
$student->set_firstName("Bob"); // Calling an object method.


===== PRINTING =====
print("print is a built-in function");


===== ARRAY CREATION =====
// Create a new array - way #1
$fruits = array('apple', 'orange');

// Create a new array - way #2
$fruits = [
    'apple',
    'orange',
];

// Create a new array - way #3
$fruits[] = 'apple';
$fruits[] = 'orange';

// You can also assign the numeric keys yourself
$fruits[5] = 'apple';
$fruits[6] = 'orange';

// Create a new associative array - way #1
$student = array(
  'firstName' => 'Susan',
  'lastName'  => 'Smith',
);

// Create a new associative array - way #2
$student = [
  'firstName' => 'Susan',
  'lastName'  => 'Smith',
];

// Create a new associative array - way #3
$student['firstName'] = 'Susan';
$student['lastName']  = 'Smith';

// New multidimensional array
$students = [
    [
        'firstName'   => 'Susan',
        'lastName'    => 'Smith',
        'dateOfBirth' => '03/15/1991',
    ],
    [
        'firstName'   => 'John',
        'lastName'    => 'Doe',
        'dateOfBirth' => '06/07/1994',
    ],
];

// Loop through multidimensional array
foreach($students as $key => $student)
{
    foreach($student as $field => $value)
    {
        print $field . ' : ' . $value . '
';
    }

    print '
';
}


===== LOOPING THROUGH ARRAY =====
// new array
$fruits = [
    'apple',
    'orange',
    'pear',
    'banana',
];

// Loop through array
foreach($fruits as $key => $val) {
    print $key . ' - ' . $val . '
';
}

*/
