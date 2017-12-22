<?php

$app->get('/', function ($params) use ($c) {

    $pages = $c['model_page'];
    $data = $pages->findFirst(2);

    return $c['view']->render('render_page.phtml', ['page' => $data]);
});

$app->get('/page/{id}', function ($params) use ($c) {
    $pages = $c['model_page'];
    $data = $pages->findFirst($params[1]);

    return $c['view']->render('render_page.phtml', ['page' => $data]);
});
