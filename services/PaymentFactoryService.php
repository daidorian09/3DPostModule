<?php

require_once('../exceptions/EmptyOrNullClassNameException.php');
require_once('../exceptions/ClassNotFoundException.php');

class PaymentFactoryService {

    public static function build($className)
    {
       if(self::isClassFound($className)){
           return new $className();
       }
    }

    private static function isClassNameEmptyOrNull($className) 
    {
        if(!isset($className)) 
        {
            throw new EmptyOrNullClassNameException();
        }
        return true;
    }

    private static function isClassFound($className) 
    {
        if(self::isClassNameEmptyOrNull($className)) 
        {
           return self::isClassAutoLoaded($className);
        }
    }

    private static function isClassAutoLoaded($className) 
    {
        include('../models/'.$className.'.php');
        if(!class_exists($className, false)) 
        {
            throw new ClassNotFoundException();
        }            
        return true;
    }
}