<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit063a39f6fdc3eecbb0d3273bc07612b5
{
    public static $files = array (
        'd4a72250dec7c0c73c26179d8efa4c70' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit063a39f6fdc3eecbb0d3273bc07612b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit063a39f6fdc3eecbb0d3273bc07612b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit063a39f6fdc3eecbb0d3273bc07612b5::$classMap;

        }, null, ClassLoader::class);
    }
}
