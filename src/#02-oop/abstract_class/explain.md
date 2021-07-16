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