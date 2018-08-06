<?php

require __DIR__ . '/autoload.php';


$data =  \App\Models\Person::findAll();
//$connection = new \App\Db();
//$res = $connection->execute('Persons',[10,'Иван', 28]);
//var_dump($res);