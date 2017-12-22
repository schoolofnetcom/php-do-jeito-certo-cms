<?php

require __DIR__.'/vendor/autoload.php';

use Pimple\Container;

$app = new ErikFig\App;
$app->setRenderer(new ErikFig\Renderer\PHPRenderer);

$container = new Container();

require __DIR__ . '/config.php';

$app->setContainer($container);

require __DIR__ . '/routes.php';

$app->run();
