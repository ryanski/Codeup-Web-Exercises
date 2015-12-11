<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function notEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] !=''){
            return true;
        }
    }


    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
        // TODO: Fill in this function
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key)) {
        return ($_REQUEST[$key]);
    }
    return null;
    }

    public static function getString($key) 
    {
        if(!is_string(self::get($key))){
             throw new Exception('$key must be a string!');
        } 
        return ($_REQUEST[$key]);
    }

    public static function getNumber($key)
    {
        if(!is_numeric(self::get($key))){
            throw new Exception('$key must be a numeric!');
        }
        return ((float)$_REQUEST[$key]);
    }

    public static function getDate($key)
    {
        $input=self::get($key);
        if(!strtotime($input)){
            throw new Exception('$key must be a date!');
        } else {
            return date('M j, Y', strtotime($input));
        }

        //top option allows 'tomorrow' as input and puts in right date.
        //bottom option doesn't. also the bottom option requires the month day, year format only.
        
        // $date=DateTime::createFromFormat('M j, Y', self::get($key));
        // if($date){
        //     return $date->format('M j, Y');
        // } else {
        //     throw new Exception('$key must be a date!');
        // }
        
    }
        // TODO: Fill in this function


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
