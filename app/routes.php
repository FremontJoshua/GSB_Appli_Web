<?php
//Home page
/*$app->get('/', function () use($app) {
    $communes = $app['dao.commune']->findAll();
    ob_start();                 // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean();     // assign HTML output to $view
    return $view;
});*/

// Home page
$app->get('/', function () use($app) {
    $communes = $app['dao.commune']->findAll();
    return $app['twig']->render(
    'index.html.twig',
    array('communes'=>$communes)
    );
});

$app->get('/commune/{id}', function ($id) use($app) {
    $nomCommune = $app['dao.commune']->findName($id);
    $secteurs = $app['dao.secteur']->findSectorsByCommune($id);
    return $app['twig']->render(
    'commune.html.twig',
    array('commune'=>$nomCommune,
          'secteurs'=>$secteurs)
    );
});

$app->get('/add/compteur', function () use($app) {
    return $app['twig']->render(
    'compteur.html.twig',
    array()
    );
});


