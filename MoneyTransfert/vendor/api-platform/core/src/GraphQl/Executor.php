<<<<<<< HEAD
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\GraphQl;

use GraphQL\Executor\ExecutionResult;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;

/**
 * Wrapper for the GraphQL facade.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
final class Executor implements ExecutorInterface
{
    /**
     * {@inheritdoc}
     */
    public function executeQuery(Schema $schema, $source, $rootValue = null, $context = null, array $variableValues = null, string $operationName = null, callable $fieldResolver = null, array $validationRules = null): ExecutionResult
    {
        return GraphQL::executeQuery($schema, $source, $rootValue, $context, $variableValues, $operationName, $fieldResolver, $validationRules);
    }
}
=======
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\GraphQl;

use GraphQL\Executor\ExecutionResult;
use GraphQL\GraphQL;
use GraphQL\Type\Schema;

/**
 * Wrapper for the GraphQL facade.
 *
 * @experimental
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
final class Executor implements ExecutorInterface
{
    /**
     * {@inheritdoc}
     */
    public function executeQuery(Schema $schema, $source, $rootValue = null, $context = null, array $variableValues = null, string $operationName = null, callable $fieldResolver = null, array $validationRules = null): ExecutionResult
    {
        return GraphQL::executeQuery($schema, $source, $rootValue, $context, $variableValues, $operationName, $fieldResolver, $validationRules);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
