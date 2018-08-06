<?php

namespace App;

use App\Models\Person;

class Db
{

    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

    }

    public function execute($query, $params)
    {

        $place_holders = implode(',', array_fill(0, count($params), '?'));

        $sth = $this->dbh->prepare("INSERT INTO " . $query . "(dep, lastname, age) VALUES(" . $place_holders . ")");

        return $sth->execute($params);

    }
}
