<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor;

use Symfony\Component\HttpFoundation\Request;

/**
 * TokenExtractorInterface.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
interface TokenExtractorInterface
{
    /**
     * @param Request $request
     *
     * @return string|false
     */
    public function extract(Request $request);
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor;

use Symfony\Component\HttpFoundation\Request;

/**
 * TokenExtractorInterface.
 *
 * @author Nicolas Cabot <n.cabot@lexik.fr>
 */
interface TokenExtractorInterface
{
    /**
     * @param Request $request
     *
     * @return string|false
     */
    public function extract(Request $request);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
