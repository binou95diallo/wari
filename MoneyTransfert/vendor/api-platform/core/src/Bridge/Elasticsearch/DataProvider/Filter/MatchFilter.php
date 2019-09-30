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

namespace ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter;

/**
 * Filter the collection by given properties using a full text query.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-match-query.html
 *
 * @experimental
 *
 * @author Baptiste Meyer <baptiste.meyer@gmail.com>
 */
final class MatchFilter extends AbstractSearchFilter
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery(string $property, array $values, ?string $nestedPath): array
    {
        $matches = [];

        foreach ($values as $value) {
            $matches[] = ['match' => [$property => $value]];
        }

        $matchQuery = isset($matches[1]) ? ['bool' => ['should' => $matches]] : $matches[0];

        if (null !== $nestedPath) {
            $matchQuery = ['nested' => ['path' => $nestedPath, 'query' => $matchQuery]];
        }

        return $matchQuery;
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

namespace ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter;

/**
 * Filter the collection by given properties using a full text query.
 *
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-match-query.html
 *
 * @experimental
 *
 * @author Baptiste Meyer <baptiste.meyer@gmail.com>
 */
final class MatchFilter extends AbstractSearchFilter
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery(string $property, array $values, ?string $nestedPath): array
    {
        $matches = [];

        foreach ($values as $value) {
            $matches[] = ['match' => [$property => $value]];
        }

        $matchQuery = isset($matches[1]) ? ['bool' => ['should' => $matches]] : $matches[0];

        if (null !== $nestedPath) {
            $matchQuery = ['nested' => ['path' => $nestedPath, 'query' => $matchQuery]];
        }

        return $matchQuery;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
