<?php

$app->get('/admin/users', function ($params) use ($c, $auth) {
    $auth();

    $users = $c['model_user'];
    $data = $users->findAll();

    return $c['view']->render('users/index.phtml', ['users' => $data]);
});

$app->get('/admin/users/new', function ($params) use ($c, $auth) {
    $auth();
    return $c['view']->render('users/new.phtml');
});

$app->post('/admin/users/new', function ($params) use ($c, $auth) {
    $auth();
    $password = filter_input(INPUT_POST, 'password');

    if (!$password) {
        header('location: /admin/users/new');
    }

    $password = password_hash($password, PASSWORD_DEFAULT, [
        'cost' => 12
    ]);

    $model = $c['model_user'];
    $model->email = filter_input(INPUT_POST, 'email');
    $model->password = $password;
    $model->save();

    header('location: /admin/users');
});

$app->get('/admin/users/{id}', function ($params) use ($c, $auth) {
    $auth();
    $users = $c['model_user'];
    $data = $users->findFirst($params[1]);

    return $c['view']->render('users/view.phtml', ['user' => $data]);
});

$app->get('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
    $auth();
    $users = $c['model_user'];
    $data = $users->findFirst($params[1]);

    return $c['view']->render('users/edit.phtml', ['user' => $data]);
});

$app->post('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
    $auth();
    $password = filter_input(INPUT_POST, 'password');

    $model = $c['model_user'];
    $model->id = $params[1];
    $model->email = filter_input(INPUT_POST, 'email');

    if ($password) {
        $password = password_hash($password, PASSWORD_DEFAULT, [
            'cost' => 12
        ]);
        $model->password = $password;
    } else {
        $data = $model->findFirst($params[1]);
        $model->password = $data['password'];
    }

    $model->save();

    header('location: /admin/users/' . $params[1]);
});

$app->post('/admin/users/delete/{id}', function ($params) use ($c, $auth) {
    $auth();
    $model = $c['model_user'];
    $model->id = $params[1];
    $model->delete();

    header('location: /admin/users');
});
