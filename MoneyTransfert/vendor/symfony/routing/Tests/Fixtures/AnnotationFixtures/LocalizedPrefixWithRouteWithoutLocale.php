<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path={"en": "/en", "nl": "/nl"})
 */
class LocalizedPrefixWithRouteWithoutLocale
{
    /**
     * @Route("/suffix", name="action")
     */
    public function action()
    {
    }
}
=======
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path={"en": "/en", "nl": "/nl"})
 */
class LocalizedPrefixWithRouteWithoutLocale
{
    /**
     * @Route("/suffix", name="action")
     */
    public function action()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
