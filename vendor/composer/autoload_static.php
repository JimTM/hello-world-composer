<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3209105b6a9fed4c8222c367f0abfbc
{
    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'World' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd3209105b6a9fed4c8222c367f0abfbc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
