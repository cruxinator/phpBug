<?php



abstract class A {
    private static function privMethod(){
    }
}

class B extends A{
    public function __call($name, $args){
        $class = new ReflectionClass(self::class);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        $method->invokeArgs(null, $args);
    }

    protected static function privMethod(){
        parent::privMethod();
    }
}

$x = new B();
$x->privMethod();
