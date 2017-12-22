<?php

$app->get('/admin/login', function ($params) use ($c) {
    return $c['view']->render('login/index.phtml');
});

$app->post('/admin/login', function ($params) use ($c) {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (!$email or !$password) {
        header('location: /admin/login');
    }

    $model = $c['model_user'];
    $qb = $model->getDriver();

    $user = $qb->select(['email' => $email])
            ->exec()
            ->first();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header('location: /admin/pages');
    }

    return $c['view']->render('login/index.phtml');
});
