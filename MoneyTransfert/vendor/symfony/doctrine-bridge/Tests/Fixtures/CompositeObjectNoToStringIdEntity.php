<<<<<<< HEAD
<?php

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * an entity that has two objects (class without toString methods) as primary key.
 *
 * @ORM\Entity
 */
class CompositeObjectNoToStringIdEntity
{
    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SingleIntIdNoToStringEntity", cascade={"persist"})
     * @ORM\JoinColumn(name="object_one_id")
     */
    protected $objectOne;

    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SingleIntIdNoToStringEntity", cascade={"persist"})
     * @ORM\JoinColumn(name="object_two_id")
     */
    protected $objectTwo;

    public function __construct(SingleIntIdNoToStringEntity $objectOne, SingleIntIdNoToStringEntity $objectTwo)
    {
        $this->objectOne = $objectOne;
        $this->objectTwo = $objectTwo;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectOne()
    {
        return $this->objectOne;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectTwo()
    {
        return $this->objectTwo;
    }
}
=======
<?php

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * an entity that has two objects (class without toString methods) as primary key.
 *
 * @ORM\Entity
 */
class CompositeObjectNoToStringIdEntity
{
    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SingleIntIdNoToStringEntity", cascade={"persist"})
     * @ORM\JoinColumn(name="object_one_id")
     */
    protected $objectOne;

    /**
     * @var SingleIntIdNoToStringEntity
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="SingleIntIdNoToStringEntity", cascade={"persist"})
     * @ORM\JoinColumn(name="object_two_id")
     */
    protected $objectTwo;

    public function __construct(SingleIntIdNoToStringEntity $objectOne, SingleIntIdNoToStringEntity $objectTwo)
    {
        $this->objectOne = $objectOne;
        $this->objectTwo = $objectTwo;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectOne()
    {
        return $this->objectOne;
    }

    /**
     * @return SingleIntIdNoToStringEntity
     */
    public function getObjectTwo()
    {
        return $this->objectTwo;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
