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