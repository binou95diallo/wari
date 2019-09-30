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

namespace ApiPlatform\Core\Tests\Bridge\Doctrine\Common\Filter;

/**
 * @author Lee Siong Chan <ahlee2326@me.com>
 */
trait RangeFilterTestTrait
{
    private function provideApplyTestArguments(): array
    {
        return [
            'between' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '9.99..15.99',
                    ],
                ],
            ],
            'between (too many operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '9.99..15.99..99.99',
                    ],
                ],
            ],
            'between (too few operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '15.99',
                    ],
                ],
            ],
            'between (non-numeric operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => 'abc..def',
                    ],
                ],
            ],
            'lt' => [
                null,
                [
                    'dummyPrice' => [
                        'lt' => '9.99',
                    ],
                ],
            ],
            'lt (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'lt' => '127.0.0.1',
                    ],
                ],
            ],
            'lte' => [
                null,
                [
                    'dummyPrice' => [
                        'lte' => '9.99',
                    ],
                ],
            ],
            'lte (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'lte' => '127.0.0.1',
                    ],
                ],
            ],
            'gt' => [
                null,
                [
                    'dummyPrice' => [
                        'gt' => '9.99',
                    ],
                ],
            ],
            'gt (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'gt' => '127.0.0.1',
                    ],
                ],
            ],
            'gte' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '9.99',
                    ],
                ],
            ],
            'gte (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '127.0.0.1',
                    ],
                ],
            ],
            'lte + gte' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '9.99',
                        'lte' => '19.99',
                    ],
                ],
            ],
        ];
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

namespace ApiPlatform\Core\Tests\Bridge\Doctrine\Common\Filter;

/**
 * @author Lee Siong Chan <ahlee2326@me.com>
 */
trait RangeFilterTestTrait
{
    private function provideApplyTestArguments(): array
    {
        return [
            'between' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '9.99..15.99',
                    ],
                ],
            ],
            'between (too many operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '9.99..15.99..99.99',
                    ],
                ],
            ],
            'between (too few operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => '15.99',
                    ],
                ],
            ],
            'between (non-numeric operands)' => [
                null,
                [
                    'dummyPrice' => [
                        'between' => 'abc..def',
                    ],
                ],
            ],
            'lt' => [
                null,
                [
                    'dummyPrice' => [
                        'lt' => '9.99',
                    ],
                ],
            ],
            'lt (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'lt' => '127.0.0.1',
                    ],
                ],
            ],
            'lte' => [
                null,
                [
                    'dummyPrice' => [
                        'lte' => '9.99',
                    ],
                ],
            ],
            'lte (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'lte' => '127.0.0.1',
                    ],
                ],
            ],
            'gt' => [
                null,
                [
                    'dummyPrice' => [
                        'gt' => '9.99',
                    ],
                ],
            ],
            'gt (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'gt' => '127.0.0.1',
                    ],
                ],
            ],
            'gte' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '9.99',
                    ],
                ],
            ],
            'gte (non-numeric)' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '127.0.0.1',
                    ],
                ],
            ],
            'lte + gte' => [
                null,
                [
                    'dummyPrice' => [
                        'gte' => '9.99',
                        'lte' => '19.99',
                    ],
                ],
            ],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
