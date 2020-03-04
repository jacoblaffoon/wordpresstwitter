<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ebbc6b94ecae5f3f4e9a7d46b592ad4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ebbc6b94ecae5f3f4e9a7d46b592ad4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ebbc6b94ecae5f3f4e9a7d46b592ad4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}