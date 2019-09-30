<<<<<<< HEAD
<?php


namespace Fig\Link;

use Psr\Link\EvolvableLinkInterface;

class Link implements EvolvableLinkInterface
{
    use EvolvableLinkTrait;

    /**
     * Link constructor.
     *
     * @param string $rel
     *   A single relationship to include on this link.
     * @param string $href
     *   An href for this link.
     */
    public function __construct($rel = '', $href = '')
    {
        if ($rel) {
            $this->rel[$rel] = true;
        }
        $this->href = $href;
    }
}
=======
<?php


namespace Fig\Link;

use Psr\Link\EvolvableLinkInterface;

class Link implements EvolvableLinkInterface
{
    use EvolvableLinkTrait;

    /**
     * Link constructor.
     *
     * @param string $rel
     *   A single relationship to include on this link.
     * @param string $href
     *   An href for this link.
     */
    public function __construct($rel = '', $href = '')
    {
        if ($rel) {
            $this->rel[$rel] = true;
        }
        $this->href = $href;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
