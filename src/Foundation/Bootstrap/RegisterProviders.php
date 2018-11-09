<?php

namespace Wpollen\Foundation\Bootstrap;

use Wpollen\Foundation\Application;

/**
* \LoadConfiguration
*/
class RegisterProviders
{
    public function bootstrap(Application $app)
    {
        $config_path = $app->getConfigPath();
        $config = require $config_path.'/app.php';
        if (empty($config['aliases'])) {
            return false;
        }
        foreach ($config['aliases'] as $className => $facadeName) {
            class_alias($facadeName, $className);
        }
    }
}