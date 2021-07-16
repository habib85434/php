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
