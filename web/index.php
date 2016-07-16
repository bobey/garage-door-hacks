<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->put('/door', function () {

    exec('gpio write 0 1');
    sleep(1);
    exec('gpio write 0 0');

    return json_encode([
        'door' => ['status' => 'opening'],
    ]);
});

$app->run();
