<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit591cebe7095ee96b453f901a7d594a72
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit591cebe7095ee96b453f901a7d594a72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit591cebe7095ee96b453f901a7d594a72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit591cebe7095ee96b453f901a7d594a72::$classMap;

        }, null, ClassLoader::class);
    }
}