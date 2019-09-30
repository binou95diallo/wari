<<<<<<< HEAD
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class BarFactory
{
    /**
     * @var iterable
     */
    private $bars;

    public function __construct(iterable $bars)
    {
        $this->bars = \iterator_to_array($bars);
    }

    public function getDefaultBar(): BarInterface
    {
        return reset($this->bars);
    }
}
=======
<?php

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class BarFactory
{
    /**
     * @var iterable
     */
    private $bars;

    public function __construct(iterable $bars)
    {
        $this->bars = \iterator_to_array($bars);
    }

    public function getDefaultBar(): BarInterface
    {
        return reset($this->bars);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
