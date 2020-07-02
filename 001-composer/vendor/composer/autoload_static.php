<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc334e4ef3cd976e79052a151e4ef7e73
{
    public static $files = array (
        '78816faac128e9970046f9e0ac21c777' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc334e4ef3cd976e79052a151e4ef7e73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc334e4ef3cd976e79052a151e4ef7e73::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc334e4ef3cd976e79052a151e4ef7e73::$classMap;

        }, null, ClassLoader::class);
    }
}
