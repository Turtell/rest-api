<?php

declare(strict_types=1);

namespace Phalcon\Api\Bootstrap;

use function Phalcon\Api\Core\appPath;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\Micro;

/**
 * Class Api
 *
 * @property Micro $application
 */
class Api extends AbstractBootstrap
{
    /**
     * Run the application
     *
     * @return mixed
     */
    public function run()
    {
        return $this->application->handle($_SERVER['REQUEST_URI']);
    }

    /**
     * @return mixed
     */
    public function setup()
    {
        $this->container = new FactoryDefault();
        $this->providers = require appPath('api/config/providers.php');

        parent::setup();
    }
}
