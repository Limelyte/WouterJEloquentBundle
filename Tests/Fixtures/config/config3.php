<?php

$container->loadFromExtension('wouterj_eloquent', array(
    'driver' => 'sqlite',
    'host' => 'local',
    'database' => 'foo.db',
    'username' => 'user',
    'password' => 'pass',
    'prefix' => 'symfo_',
    'eloquent' => true,
    'aliases' => true,
));
