<?php


namespace App;


abstract class Model
{
    public $id;
    public static $table = null;

    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::$table, static::class);
    }
//    public function execute($query,$params=[]){
//        $sth = $this->dbh->prepare($query);
//        $sth->execute();
//    }

}