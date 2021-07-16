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

