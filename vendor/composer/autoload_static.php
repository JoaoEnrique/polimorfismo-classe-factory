<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0a15e38d18774d282a4503608b679b8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0a15e38d18774d282a4503608b679b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0a15e38d18774d282a4503608b679b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0a15e38d18774d282a4503608b679b8::$classMap;

        }, null, ClassLoader::class);
    }
}
