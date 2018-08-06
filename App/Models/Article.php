<?php


namespace App\Models;

use \App\Db;

class Article extends \App\Model
{
    public static $table = 'News';

    public static function getNews()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::$table . ' ORDER BY `id` DESC limit 3', static::class);


    }
}