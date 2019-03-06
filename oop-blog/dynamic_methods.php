<?php
class Users{
    static function find($args){
        $sql = "SELECT * FROM users WHERE {$args['field']} = {$args['value']}";
        echo $sql;
        echo "<br>";
//        return the resultset
    }
    static function __callStatic($name, $arguments)
    {
        if(preg_match('/^findBy(.+)$/', $name, $matches)){
            return static::find(array('field'=>$matches[1], 'value'=>$arguments[0]));
        }
    }
}

$user = Users::findById(123);
$user1 = Users::findByName("Divyesh");