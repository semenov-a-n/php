<?php

require __DIR__ . '/autoload.php';

include __DIR__ . '/article.php';

//$data =  \App\Models\Person::findById(2);
//var_dump($data);


foreach ($data as $item) {
    echo '<a href="/article.php?id=' . $item->id . '">' . $item->num . '</a><br>';
}

