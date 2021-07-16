# Static Method
### How to define static property or method?
```
    static class Member
    {
        public static $age = 37;
        public static function hello()
        {
            echo "I am a member.";
        }
    }

```
### Benifit
If there is a static method in a class then we dont need to create the
class object to access the method.

### How to access?
To access static property or method we need to use "self" keyword and scope
resolution operator "::".

#### Access a property
```
    public function display()
    {
        echo "The age is : ". self::$age;
    }

```

#### Access a method
```
    public function display()
    {
        Member::hello();
    }

```


# Inheritance
If we create a class and there are some methods in the classes and we need to
use those methods in many places then we will "extends" this class into many
sub-classes which is Inheritance. However, in a sub-class, methods can be overrite

```
    //Supper class
    class User()
    {
        //methods....
        public function getId()
        {
            return 10;
        }
        
    }
    
    //sub-class
    class UserData extends User
    {
        //code..
        $userId = $this->getId();
    }
    
    //sub-class
    class Member extends User
    {
        //code..
    }  

```

### Preventing from Extending & Overriding
If we use "final" keyword in a class then we will not able to extend the
class or we can not create sub-classes of the final class. However, if we
use "final" before the method then we will not be able to override the
method anymore.

```
    //Class example
    final class User
    {
        //methods....
        public function getId()
        {
            return 10;
        }
    }
    
    //Method example
    class Member 
    {
        public final function setMemberName()
        {
            //code..
            
        }
    }

```

# Polymorphism
Polymorphism is a concept, where we can extend supper class and we can
create many sub-classes. However, we can create many methods and functionalities
in those sub-classes, this is called polymorphism.
<br />
In short, polymorphism is Inheritance and overridden methods.

# Abastract Class
In abstract class, there will be some methods with body or definition or without body or definition. We can not create
an instance of the abstract class directly. However, we can extend the class and override methods.

````
    <?php
    abstract class Student
    {
        private $name;
        private $age;
        
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }  
        
        public function studentDetails()
        {
            echo "The student name is $this->name and age is $this->age";
        }  
    }
    
    class School extends Student
    {
        public function shortDetails()
        {
            return parent::studentDetails();
        }
    }
    
    $student = new School('Jack', 26);
    echo $student->shortDetails();
````

# Abastract Method
To create an abstract method, the class must be an abstract class.
````
    <?php
    abstract class Student
    {    
        abstract public function preference()
    }
    
    class School extends Student
    { 
        public function preference()
        {
            return "I like to play computer games."
        }
    }
    
    $student = new School();
    echo $student->preference();
````

# Interface
There will be some methods declaration in an interface but not the method definition and some other class or classes
will implement an interface.
````
    <? php 
    interface Office 
    {
        public function employees();
        public function officeShift();
    }
    
    class Salary implements Office 
    {
        public function __construct()
        {
            $this->officeShift();
        }
        
        public function employees()
        {
            //overrite method
        }
        
        public function officeShift()
        {
            echo 'Morning shift: 9am to 6pm.';
        }         
    }
    
    $office = new Office();  
````
Note: A class can implement multiple interfaces.


