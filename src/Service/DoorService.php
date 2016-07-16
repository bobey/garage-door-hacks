<?php

namespace GarageDoorHacks\Service;

use Symfony\Component\Process\Process;

class DoorService
{
    public function open()
    {
        $initGpioProcess = new Process('gpio mode 0 out');
        $initGpioProcess->run();

        $openCommandProcess = new Process('gpio write 0 1 && sleep 3 && gpio write 0 0');
        $openCommandProcess->run();
    }
}
