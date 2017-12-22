<?php

$c = $app->getContainer();

session_start();

$auth = function () {
    $user = $_SESSION['user'] ?? null;
    if (!$user) {
        header('location: /admin/login');
        die();
    }
};

require __DIR__ . '/modules/admin_users.php';
require __DIR__ . '/modules/admin_pages.php';
require __DIR__ . '/modules/admin_login.php';
require __DIR__ . '/modules/pages.php';
