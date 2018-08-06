<?php


namespace App\Models;

use \App\Db;
class Person extends \App\Model
{
    public static $table = 'Persons';
    public static $key;

    public $lastname;
    public $age;



}