<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Extension\Validator\ViolationMapper;

use Symfony\Component\PropertyAccess\PropertyPathIterator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPathIterator extends PropertyPathIterator
{
    public function __construct(ViolationPath $violationPath)
    {
        parent::__construct($violationPath);
    }

    public function mapsForm()
    {
        return $this->path->mapsForm($this->key());
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Extension\Validator\ViolationMapper;

use Symfony\Component\PropertyAccess\PropertyPathIterator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPathIterator extends PropertyPathIterator
{
    public function __construct(ViolationPath $violationPath)
    {
        parent::__construct($violationPath);
    }

    public function mapsForm()
    {
        return $this->path->mapsForm($this->key());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
