<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd623bf18bd862ee63a9bbe9992e886d
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        'a1105708a18b76903365ca1c4aa61b02' => __DIR__ . '/..' . '/symfony/translation/Resources/functions.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '460404fa6d3686d7820838788517c1f9' => __DIR__ . '/..' . '/rappasoft/laravel-helpers/src/arrays.php',
        'c0908dd0408c67235210b4bf031d1290' => __DIR__ . '/..' . '/rappasoft/laravel-helpers/src/classes.php',
        '728cd66d334b33c0fb1ed0fe1060a82b' => __DIR__ . '/..' . '/rappasoft/laravel-helpers/src/helpers.php',
        'daf45b1134c9868f305965e4c0e0f06c' => __DIR__ . '/..' . '/rappasoft/laravel-helpers/src/strings.php',
        'fe62ba7e10580d903cc46d808b5961a4' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/helpers.php',
        'caf31cc6ec7cf2241cb6f12c226c3846' => __DIR__ . '/..' . '/tightenco/collect/src/Collect/Support/alias.php',
        '87a441cc0a9becb56112f465a238f99e' => __DIR__ . '/../..' . '/core/library/Moka_Init.php',
        '26744785a0b9c45a7b57bb9d66a61060' => __DIR__ . '/../..' . '/core/library/Moka_Gateway.php',
        '9339c423427a46c6a4b1eb06acd29212' => __DIR__ . '/../..' . '/core/library/Optimisthub_Update_Checker.php',
        '59cf957801c02b59a7fed8baaea9c4a0' => __DIR__ . '/../..' . '/core/library/Moka_Core.php',
        '80d12e38c70a623c2f4b076af5ece48e' => __DIR__ . '/../..' . '/core/library/Optimisthub_Ajax.php',
        '9693caca9460e126adf2382bbe0c7d19' => __DIR__ . '/../..' . '/core/library/Optimisthub_Transaction_History.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tightenco\\Collect\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tightenco\\Collect\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Collect',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd623bf18bd862ee63a9bbe9992e886d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd623bf18bd862ee63a9bbe9992e886d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd623bf18bd862ee63a9bbe9992e886d::$classMap;

        }, null, ClassLoader::class);
    }
}
