<?php

namespace GarageDoorHacks;

use GarageDoorHacks\Service\DoorService;

class Application extends \Silex\Application
{
    public function init($debug = false)
    {
        $this->put('/door', function () {

            $doorService = new DoorService();
            $doorService->open();

            return json_encode([
                'door' => ['status' => 'opening'],
            ]);
        });
    }
}  
