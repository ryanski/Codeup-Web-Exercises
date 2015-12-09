<?php 

class Model

{
    // Array to store our key/value attributes
    protected static $dbc;
    private $attributes = [];
    protected static $table;
    //$table defined in model_test.php

      /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!isset(static::$dbc)) {
            require 'db_connect.php';

            static::$dbc = $dbc;
           
             // @TODO: Connect to database
            //if $dbc is not conneccted, connect it and save it as $dbc.
            // self::$dbc = $dbc;
            var_dump('you are connected');
            
        }
    }

    // Magic setter to populate $attributes array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $attributes
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $attributes
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

       public function save()
    {
        // @TODO: Ensure there are attributes before attempting to save
        //    // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
        if(!empty($this->attributes))
        {
            if(isset($this->attributes['id'])) {
                $this->update($this->attributes['id']);
            } else {
                    $this->insert();
            }
        }
            
    }


        
           

        
        // }

            

            // var_dump($values);

            // var_dump($query);

        
        // if($attributes['id'] = $value) {
        //     $value = "INSERT INTO users (email, name) VALUES ()";
        // }

        //do update last
        // @TODO: Ensure that update is properly handled with the id key

        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        // @TODO: Use prepared statements to ensure data security
    // }

    /*
     * Find a record based on an id
     */

    protected function insert() {
        $table = static::$table;

           self::dbConnect(); 

            $columnNames = array_keys($this->attributes);
            $colonKey = [];

            foreach($columnNames as $value){
                $colonKey[] = ":".$value;
                } 

            $colonKey = implode(', ', $colonKey);

            var_dump($colonKey);
            // var_dump($columnNames);


            $columnNames = implode(', ', $columnNames);

            // var_dump(implode(', ', $columnNames));

        $query = "INSERT INTO $table
                             ($columnNames) VALUES ($colonKey);";
           $stmt = self::$dbc->prepare($query);

           
            foreach($this->attributes as $key => $value){
                  $stmt->bindValue(':'.$key, $value, PDO::PARAM_STR);
                }
    
            $stmt->execute();
             var_dump($stmt);

    }

    public function update($id) 
    {
        $table = static::$table;

           self::dbConnect();
          

            //this gets attributes from the object.
            unset($this->attributes['id']);
            //takes id out and saves so id is not in mysql query, which will happpen below.

            $updateArray=[];
            foreach($this->attributes as $key=>$value){
                $update= $key .' = :'.$key;
                array_push($updateArray, $update);
            }
            var_dump($updateArray);
            $updateString = implode(', ', $updateArray);
            var_dump($updateString);





            //update $table set
            //   column = :column
            // where key = :key
            $this->attributes['id'] = $id;
            $stmt = self::$dbc->prepare("UPDATE ".$table." SET ".$updateString." WHERE id = :id");

            
            foreach($this->attributes as $key=>$value){
                $stmt->bindValue(':'.$key, $value, PDO::PARAM_STR);
            }

            var_dump($stmt);
            $stmt->execute();
    }

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        $table = static::$table;
        $myQuery = "SELECT * FROM $table where id = ".$id;

        $stmt = self::$dbc->query($myQuery);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // @TODO: Create select statement using prepared statements

        // @TODO: Store the resultset in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        $table = static::$table;
        $myQuery = "SELECT * FROM $table";


        $stmt = self::$dbc->query($myQuery);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

          $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;

      
    }


    // public static function getTableName()
    // {
    // 	return static::$table;
    // }
}

