<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(path={"nl": "/nl"})
 */
class LocalizedPrefixMissingLocaleActionController
{
    /**
     * @Route(path={"nl": "/actie", "en": "/action"}, name="action")
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
 * @Route(path={"nl": "/nl"})
 */
class LocalizedPrefixMissingLocaleActionController
{
    /**
     * @Route(path={"nl": "/actie", "en": "/action"}, name="action")
     */
    public function action()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
