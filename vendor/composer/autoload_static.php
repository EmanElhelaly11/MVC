<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d8c1a7a05d732812390adfdcff65172
{
    public static $classMap = array (
        'ComposerAutoloaderInit6d8c1a7a05d732812390adfdcff65172' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit6d8c1a7a05d732812390adfdcff65172' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'core\\Request' => __DIR__ . '/../..' . '/app/core/Request.php',
        'core\\Router' => __DIR__ . '/../..' . '/app/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6d8c1a7a05d732812390adfdcff65172::$classMap;

        }, null, ClassLoader::class);
    }
}