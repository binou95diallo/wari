<<<<<<< HEAD
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Tag\MethodTag as LegacyMethodTag;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
final class LegacyClassTagRetriever implements MethodTagRetrieverInterface
{
    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]
     */
    public function getTagList(\ReflectionClass $reflectionClass)
    {
        $phpdoc = new DocBlock($reflectionClass->getDocComment());

        return $phpdoc->getTagsByName('method');
    }
}
=======
<?php

/*
 * This file is part of the Prophecy.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *     Marcello Duarte <marcello.duarte@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Prophecy\PhpDocumentor;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Tag\MethodTag as LegacyMethodTag;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 *
 * @internal
 */
final class LegacyClassTagRetriever implements MethodTagRetrieverInterface
{
    /**
     * @param \ReflectionClass $reflectionClass
     *
     * @return LegacyMethodTag[]
     */
    public function getTagList(\ReflectionClass $reflectionClass)
    {
        $phpdoc = new DocBlock($reflectionClass->getDocComment());

        return $phpdoc->getTagsByName('method');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
