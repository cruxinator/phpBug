<?php

abstract class A {
    private static function privMethod(){
    }
}

class B extends A{
    public function callPriv(){
        self::privMethod();
    }

    protected static function privMethod(){
        parent::privMethod();
    }
}

$x = new B();
$x->callPriv();
