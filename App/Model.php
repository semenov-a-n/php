<?php


namespace App;


abstract class Model
{
    public static $key = null;
    public $id;
    public static $table = null;

    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::$table, static::class);
    }

    public static function findById($key)
    {
        static::$key = $key;
        $db = new Db();
        $res = $db->query('SELECT * FROM ' . static::$table . ' WHERE id=' . static::$key, static::class);
        if (empty($res)) {
            return false;
        }
        return $res;
    }

}