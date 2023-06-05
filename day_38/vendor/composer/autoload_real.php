<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit176f68b511a0d5a9f8096a07f29586e5
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

        spl_autoload_register(array('ComposerAutoloaderInit176f68b511a0d5a9f8096a07f29586e5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit176f68b511a0d5a9f8096a07f29586e5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit176f68b511a0d5a9f8096a07f29586e5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
