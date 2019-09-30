<<<<<<< HEAD
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

use Symfony\Component\HttpFoundation\Request;

/**
 * Represents a parameter that must be present in POST data.
 *
 * @Annotation
 * @Target("METHOD")
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Boris Guéry    <guery.b@gmail.com>
 */
class RequestParam extends AbstractScalarParam
{
    /** @var bool */
    public $strict = true;

    /**
     * {@inheritdoc}
     */
    public function getValue(Request $request, $default = null)
    {
        return $request->request->get($this->getKey(), $default);
    }
}
=======
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

use Symfony\Component\HttpFoundation\Request;

/**
 * Represents a parameter that must be present in POST data.
 *
 * @Annotation
 * @Target("METHOD")
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Boris Guéry    <guery.b@gmail.com>
 */
class RequestParam extends AbstractScalarParam
{
    /** @var bool */
    public $strict = true;

    /**
     * {@inheritdoc}
     */
    public function getValue(Request $request, $default = null)
    {
        return $request->request->get($this->getKey(), $default);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
