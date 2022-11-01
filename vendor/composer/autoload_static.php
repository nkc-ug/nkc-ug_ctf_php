<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb623f8a74750adc6066dd5338e55544
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb623f8a74750adc6066dd5338e55544::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb623f8a74750adc6066dd5338e55544::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticIniteb623f8a74750adc6066dd5338e55544::$classMap;

        }, null, ClassLoader::class);
    }
}