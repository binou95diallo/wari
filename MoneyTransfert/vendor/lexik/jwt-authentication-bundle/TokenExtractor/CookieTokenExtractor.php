<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor;

use Symfony\Component\HttpFoundation\Request;

/**
 * CookieTokenExtractor.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class CookieTokenExtractor implements TokenExtractorInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function extract(Request $request)
    {
        return $request->cookies->get($this->name, false);
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor;

use Symfony\Component\HttpFoundation\Request;

/**
 * CookieTokenExtractor.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
class CookieTokenExtractor implements TokenExtractorInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function extract(Request $request)
    {
        return $request->cookies->get($this->name, false);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
