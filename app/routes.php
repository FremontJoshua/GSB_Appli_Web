<?php

// Home page
$app->get('/', function () use($app) {
    $visitors = $app['dao.visitor']->findAll();
    return $app['twig']->render(
    'index.html.twig',
    array('visitors'=>$visitors)
    );
});