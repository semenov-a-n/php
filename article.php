<?php

require __DIR__ . '/autoload.php';

$data = \App\Models\Article::getNews();
foreach ($data as $new) {
    if ($new->id == $_GET['id']) {
        echo '<h2>' . $new->num . '</h2>' . '<p>' . $new->new . '</p>';
        exit;
    }
}
