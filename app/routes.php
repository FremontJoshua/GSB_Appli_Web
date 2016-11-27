<?php

// Home page
$app->get('/', function () use($app) {
    return $app['twig']->render(
    'index.html.twig'
    );
});

$app->get('/visitor', function () use($app) {
    $visitors = $app['dao.visitor']->findAll();
    return $app['twig']->render(
    'visitor.html.twig',
    array('visitors'=>$visitors)
    );
});