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

namespace Symfony\Component\Mime\Part\Multipart;

use Symfony\Component\Mime\Part\AbstractMultipartPart;
use Symfony\Component\Mime\Part\MessagePart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class DigestPart extends AbstractMultipartPart
{
    public function __construct(MessagePart ...$parts)
    {
        parent::__construct(...$parts);
    }

    public function getMediaSubtype(): string
    {
        return 'digest';
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

namespace Symfony\Component\Mime\Part\Multipart;

use Symfony\Component\Mime\Part\AbstractMultipartPart;
use Symfony\Component\Mime\Part\MessagePart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
final class DigestPart extends AbstractMultipartPart
{
    public function __construct(MessagePart ...$parts)
    {
        parent::__construct(...$parts);
    }

    public function getMediaSubtype(): string
    {
        return 'digest';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
