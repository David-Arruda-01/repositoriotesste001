<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c3693d619d31b07bbf1009af7d31cb9
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fmk\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fmk\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c3693d619d31b07bbf1009af7d31cb9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c3693d619d31b07bbf1009af7d31cb9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c3693d619d31b07bbf1009af7d31cb9::$classMap;

        }, null, ClassLoader::class);
    }
}
