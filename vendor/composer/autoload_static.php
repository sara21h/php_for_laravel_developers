<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53a0a0557c5b0bdf752e64803d63a2dd
{
    public static $classMap = array (
        'App\\Models\\Task' => __DIR__ . '/../..' . '/app/Models/Task.php',
        'ComposerAutoloaderInit53a0a0557c5b0bdf752e64803d63a2dd' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit53a0a0557c5b0bdf752e64803d63a2dd' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Framework\\App' => __DIR__ . '/../..' . '/framework/App.php',
        'Framework\\Database\\Connection' => __DIR__ . '/../..' . '/framework/Database/Connection.php',
        'Framework\\Database\\Database' => __DIR__ . '/../..' . '/framework/Database/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit53a0a0557c5b0bdf752e64803d63a2dd::$classMap;

        }, null, ClassLoader::class);
    }
}