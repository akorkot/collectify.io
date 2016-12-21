<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb99754b7014965bec295e44c2d35f80
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
        '3fad0ebbff9928a94a9d8941fb314bd8' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Bundle\\SwiftmailerBundle\\' => 33,
            'Symfony\\Bundle\\MonologBundle\\' => 29,
            'Symfony\\Bundle\\AsseticBundle\\' => 29,
            'Sensio\\Bundle\\FrameworkExtraBundle\\' => 35,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'I' => 
        array (
            'Incenteev\\ParameterHandler\\' => 27,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
            'Doctrine\\Bundle\\DoctrineCacheBundle\\' => 36,
            'Doctrine\\Bundle\\DoctrineBundle\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Bundle\\SwiftmailerBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/swiftmailer-bundle',
        ),
        'Symfony\\Bundle\\MonologBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/monolog-bundle',
        ),
        'Symfony\\Bundle\\AsseticBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/assetic-bundle',
        ),
        'Sensio\\Bundle\\FrameworkExtraBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/sensio/framework-extra-bundle',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Incenteev\\ParameterHandler\\' => 
        array (
            0 => __DIR__ . '/..' . '/incenteev/composer-parameter-handler',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/common/lib/Doctrine/Common',
        ),
        'Doctrine\\Bundle\\DoctrineCacheBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-cache-bundle',
        ),
        'Doctrine\\Bundle\\DoctrineBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-bundle',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Icu\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/icu',
            ),
            'Symfony\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/symfony/src',
            ),
            'Sensio\\Bundle\\GeneratorBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/generator-bundle',
            ),
            'Sensio\\Bundle\\DistributionBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/distribution-bundle',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\ORM\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/orm/lib',
            ),
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Collator.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/NumberFormatter.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'SqlFormatter' => __DIR__ . '/..' . '/jdorn/sql-formatter/lib/SqlFormatter.php',
        'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb99754b7014965bec295e44c2d35f80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb99754b7014965bec295e44c2d35f80::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcb99754b7014965bec295e44c2d35f80::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInitcb99754b7014965bec295e44c2d35f80::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInitcb99754b7014965bec295e44c2d35f80::$classMap;

        }, null, ClassLoader::class);
    }
}
