<?php

namespace package\AbstractFactory\Factory;

use package\AbstractFactory\Conditioner\MeidiAirConditioner;
use package\AbstractFactory\Engine\WEngine;

class BenchiFactory extends CarFactory
{

    public function installAirConditioner()
    {
        return new MeidiAirConditioner();
    }

    public function installEngine()
    {
        return new WEngine();
    }
}
