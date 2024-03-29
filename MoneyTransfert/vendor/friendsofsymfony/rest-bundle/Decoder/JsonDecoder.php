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

namespace FOS\RestBundle\Decoder;

/**
 * Decodes JSON data.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonDecoder implements DecoderInterface
{
    /**
     * {@inheritdoc}
     */
    public function decode($data)
    {
        return @json_decode($data, true);
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

namespace FOS\RestBundle\Decoder;

/**
 * Decodes JSON data.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class JsonDecoder implements DecoderInterface
{
    /**
     * {@inheritdoc}
     */
    public function decode($data)
    {
        return @json_decode($data, true);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
