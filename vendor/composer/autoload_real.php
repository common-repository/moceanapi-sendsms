<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc778e66ae1d315098eea0af48dd7e11
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

        spl_autoload_register(array('ComposerAutoloaderInitcc778e66ae1d315098eea0af48dd7e11', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc778e66ae1d315098eea0af48dd7e11', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc778e66ae1d315098eea0af48dd7e11::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
