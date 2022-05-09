<?php


$router->get('/haha', 'App\Controllers\HomeController@index');

$router->get('/loop', function () {
    echo '<h2>Here we are looping again';
});
