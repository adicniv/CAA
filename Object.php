<?php

class Object{
    function Autoload($param) {
        //Warning:        This feature has been DEPRECATED as of PHP 7.2.0. Relying on this feature is highly discouraged.
        __autoload();
        return"";
    }
    function Call_user_func_array($param) {
        /**
         *  Warning
            This function was DEPRECATED in PHP 4.1.0, and REMOVED in PHP 7.0.0.
            
            Alternatives to this function include:
            
            call_user_func_array()
         */
        //call_user_method_array();
        call_user_func_array(array($obj, $method_name), $params);
        return"";
    }
    function Call_user_method($param) {
        //call_user_method ( string $method_name , object &$obj [, mixed $parameter [, mixed $... ]] ) : mixed
        call_user_func(array($obj, $method_name), $parameter /* , ... */);
        return"";
    }
    function function_name($param) {
        //class_alias ( string $original , string $alias [, bool $autoload = TRUE ] ) : bool;
        class foo { }
        
        class_alias('foo', 'bar');
        
        $a = new foo;
        $b = new bar;
        
        // the objects are the same
        var_dump($a == $b, $a === $b);
        var_dump($a instanceof $b);
        
        // the classes are the same
        var_dump($a instanceof foo);
        var_dump($a instanceof bar);
        
        var_dump($b instanceof foo);
        var_dump($b instanceof bar);
        return"";
    }
    function Class_exists($param) {
        //class_exists ( string $class_name [, bool $autoload = true ] ) : bool;
        // 使用前检查类是否存在
        if (class_exists('MyClass')) {
            $myclass = new MyClass();
        }
        return"";
    }
    function Get_called_class($param) {
        //get_called_class ( void ) : string;
        class foo {
            static public function test() {
                var_dump(get_called_class());
            }
        }
        
        class bar extends foo {
        }
        
        foo::test();
        bar::test();
        return"";
    }
    function Get_class_methods($param) {
        //get_class_methods ( mixed $class_name ) : array;
        class myclass {
            // constructor
            function myclass()
            {
                return(true);
            }
            
            // method 1
            function myfunc1()
            {
                return(true);
            }
            
            // method 2
            function myfunc2()
            {
                return(true);
            }
        }
        
        $class_methods = get_class_methods('myclass');
        // or
        $class_methods = get_class_methods(new myclass());
        
        foreach ($class_methods as $method_name) {
            echo "$method_name\n";
        }
        return "";
    }
    function Get_class_vars($param) {
        //get_class_vars ( string $class_name ) : array;
        class myclass {
            
            var $var1; // this has no default value...
            var $var2 = "xyz";
            var $var3 = 100;
            private $var4;
            
            // constructor
            function __construct() {
                // change some properties
                $this->var1 = "foo";
                $this->var2 = "bar";
                return true;
            }
            
        }
        
        $my_class = new myclass();
        
        $class_vars = get_class_vars(get_class($my_class));
        
        foreach ($class_vars as $name => $value) {
            echo "$name : $value\n";
        }
        return "";
    }
    function Get_class($param) {
        //get_class ([ object $object = NULL ] ) : string;
        class foo {
            function name()
            {
                echo "My name is " , get_class($this) , "\n";
            }
        }
        
        // create an object
        $bar = new foo();
        
        // external call
        echo "Its name is " , get_class($bar) , "\n";
        
        // internal call
        $bar->name();
        return "";
    }
    function Get_declared_classes($param) {
        //get_declared_classes ( void ) : array;
        print_r(get_declared_classes());
        return "";
    }
    function Get_declared_interfaces($param) {
        //get_declared_interfaces ( void ) : array;
        print_r(get_declared_interfaces());
        return "";
    }
    function Get_declared_traits($param) {
        //get_declared_traits ( void ) : array;
        return "";
    }
    function Get_object_vars($param) {
        //get_object_vars ( object $obj ) : array;
        class Point2D {
            var $x, $y;
            var $label;
            
            function Point2D($x, $y)
            {
                $this->x = $x;
                $this->y = $y;
            }
            
            function setLabel($label)
            {
                $this->label = $label;
            }
            
            function getPoint()
            {
                return array("x" => $this->x,
                    "y" => $this->y,
                    "label" => $this->label);
            }
        }
        
        // "$label" is declared but not defined
        $p1 = new Point2D(1.233, 3.445);
        print_r(get_object_vars($p1));
        
        $p1->setLabel("point #1");
        print_r(get_object_vars($p1));
        return "";
        
    }
    function Get_parent_class($param) {
        //get_parent_class ([ mixed $obj ] ) : string;
        class dad {
            function dad()
            {
                // implements some logic
            }
        }
        
        class child extends dad {
            function child()
            {
                echo "I'm " , get_parent_class($this) , "'s son\n";
            }
        }
        
        class child2 extends dad {
            function child2()
            {
                echo "I'm " , get_parent_class('child2') , "'s son too\n";
            }
        }
        
        $foo = new child();
        $bar = new child2();
        return "";
    }
    function Interface_exists($param) {
        //interface_exists ( string $interface_name [, bool $autoload = true ] ) : bool;
        // 在尝试使用前先检查接口是否存在
        if (interface_exists('MyInterface')) {
            class MyClass implements MyInterface
            {
                // Methods
            }
        }
        return "";
    }
    function is_a($param) {
        //is_a ( object $object , string $class_name [, bool $allow_string = FALSE ] ) : bool;
        // define a class
        class WidgetFactory
        {
            var $oink = 'moo';
        }
        
        // create a new object
        $WF = new WidgetFactory();
        
        if (is_a($WF, 'WidgetFactory')) {
            echo "yes, \$WF is still a WidgetFactory\n";
        }
        if ($WF instanceof WidgetFactory) {
            echo 'Yes, $WF is a WidgetFactory';
        }
        return "";
    }
    function is_subclass_of($param) {
        //is_subclass_of ( object $object , string $class_name ) : bool;
        // define a class
        class WidgetFactory
        {
            var $oink = 'moo';
        }
        
        // define a child class
        class WidgetFactory_Child extends WidgetFactory
        {
            var $oink = 'oink';
        }
        
        // create a new object
        $WF = new WidgetFactory();
        $WFC = new WidgetFactory_Child();
        
        if (is_subclass_of($WFC, 'WidgetFactory')) {
            echo "yes, \$WFC is a subclass of WidgetFactory\n";
        } else {
            echo "no, \$WFC is not a subclass of WidgetFactory\n";
        }
        
        if (is_subclass_of($WF, 'WidgetFactory')) {
            echo "yes, \$WF is a subclass of WidgetFactory\n";
        } else {
            echo "no, \$WF is not a subclass of WidgetFactory\n";
        }
        
        // usable only since PHP 5.0.3
        if (is_subclass_of('WidgetFactory_Child', 'WidgetFactory')) {
            echo "yes, WidgetFactory_Child is a subclass of WidgetFactory\n";
        } else {
            echo "no, WidgetFactory_Child is not a subclass of WidgetFactory\n";
        }
        return "";
    }
    function method_exists($param) {
        //method_exists ( mixed $object , string $method_name ) : bool;
        $directory = new Directory('.');
        var_dump(method_exists($directory,'read'));
        return "";
    }
    function property_exists($param) {
        //property_exists ( mixed $class , string $property ) : bool;
        class myClass {
            public $mine;
            private $xpto;
            static protected $test;
            
            static function test() {
                var_dump(property_exists('myClass', 'xpto')); //true
            }
        }
        
        var_dump(property_exists('myClass', 'mine'));   //true
        var_dump(property_exists(new myClass, 'mine')); //true
        var_dump(property_exists('myClass', 'xpto'));   //true, as of PHP 5.3.0
        var_dump(property_exists('myClass', 'bar'));    //false
        var_dump(property_exists('myClass', 'test'));   //true, as of PHP 5.3.0
        myClass::test();
        return "";
        
    }
    function trait_exists($param) {
        //trait_exists ( string $traitname [, bool $autoload ] ) : bool;
        return "";
        
    }
    
}