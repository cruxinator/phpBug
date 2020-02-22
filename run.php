<?php



abstract class A {
    private static function privMethod(){
    }
}

class B extends A{
    public function __call(){
        $class = new ReflectionClass(self::class);
        $method = $class->getMethod('privMethod');
        $method->setAccessible(true);
        $method->invokeArgs(null, null);
    }

    protected static function privMethod(){
        parent::privMethod();
    }
}

$x = new B();
$x->callPriv();
