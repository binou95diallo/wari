<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class CustomExpressionLanguageFunctionTest extends TestCase
{
    public function testDump()
    {
        $container = new ContainerBuilder();
        $container->register('test', 'stdClass')
            ->setPublic(true)
            ->setArguments([new Expression('custom_func("foobar")')]);

        $container->addExpressionLanguageProvider(new class() implements ExpressionFunctionProviderInterface {
            public function getFunctions()
            {
                return [
                    ExpressionFunction::fromPhp('strtolower', 'custom_func'),
                ];
            }
        });
        $container->compile();

        $dump = new PhpDumper($container);
        $dumped = $dump->dump();

        $this->assertContains('strtolower("foobar")', $dumped);
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\ExpressionLanguage\ExpressionFunction;
use Symfony\Component\ExpressionLanguage\ExpressionFunctionProviderInterface;

class CustomExpressionLanguageFunctionTest extends TestCase
{
    public function testDump()
    {
        $container = new ContainerBuilder();
        $container->register('test', 'stdClass')
            ->setPublic(true)
            ->setArguments([new Expression('custom_func("foobar")')]);

        $container->addExpressionLanguageProvider(new class() implements ExpressionFunctionProviderInterface {
            public function getFunctions()
            {
                return [
                    ExpressionFunction::fromPhp('strtolower', 'custom_func'),
                ];
            }
        });
        $container->compile();

        $dump = new PhpDumper($container);
        $dumped = $dump->dump();

        $this->assertContains('strtolower("foobar")', $dumped);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
