<?php

abstract class A {
    private static function privMethod(){
    }
}

class B extends A{
    public function callPriv(){
        self::privMethod();
    }
}

$x = new B();
$x->callPriv();
