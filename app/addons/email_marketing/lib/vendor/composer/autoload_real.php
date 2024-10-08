<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit419350747982ecb3bc127b9afebf0cdc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit419350747982ecb3bc127b9afebf0cdc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit419350747982ecb3bc127b9afebf0cdc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit419350747982ecb3bc127b9afebf0cdc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
