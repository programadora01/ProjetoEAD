<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdff98b0c69b73a9fa6b0e28f28814221
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdff98b0c69b73a9fa6b0e28f28814221::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdff98b0c69b73a9fa6b0e28f28814221::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
