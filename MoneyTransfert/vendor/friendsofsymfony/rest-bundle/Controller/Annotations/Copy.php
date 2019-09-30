<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Controller\Annotations;

/**
 * COPY Route annotation class.
 *
 * @Annotation
 * @Target("METHOD")
 *
 * @author Maximilian Bosch <maximilian.bosch.27@gmail.com>
 */
class Copy extends Route
{
    public function getMethod()
    {
        return 'COPY';
    }
}
