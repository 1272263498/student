<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7478799c9c83a0fa3f51bb43021c680
{
    public static $files = array (
        'f234554f4a6caa2a44072b42c10e186e' => __DIR__ . '/../..' . '/houdunwang/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'h' => 
        array (
            'houdunwang\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
        'C' => 
        array (
            'Composer\\Spdx\\' => 14,
            'Composer\\Semver\\' => 16,
            'Composer\\CaBundle\\' => 18,
            'Composer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'houdunwang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/houdunwang',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
        'Composer\\Spdx\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/spdx-licenses/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/composer/src/Composer',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7478799c9c83a0fa3f51bb43021c680::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7478799c9c83a0fa3f51bb43021c680::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite7478799c9c83a0fa3f51bb43021c680::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
