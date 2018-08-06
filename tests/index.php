<?php

require __DIR__ . '/../autoload.php';

//В таблице persons, три столбца (dep, lastname, age) Значения в полях по умолчанию - нет.

$connection = new \App\Db();

$res = $connection->execute('Persons',[10,'Иван', 28]);
var_dump($res); // true

$res2 = $connection->execute('Persons',[10,'Иван']);
var_dump($res2); //false

$res3 = $connection->execute('Per',[10,'Иван', 28]);
var_dump($res3); //false