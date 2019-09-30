<<<<<<< HEAD
<?php

namespace Symfony\Component\PropertyAccess\Tests;

class TestPluralAdderRemoverAndSetterSameSingularAndPlural
{
    private $aircraft = [];

    public function getAircraft()
    {
        return $this->aircraft;
    }

    public function setAircraft(array $aircraft)
    {
        $this->aircraft = ['plane'];
    }

    public function addAircraft($aircraft)
    {
        $this->aircraft[] = $aircraft;
    }

    public function removeAircraft($aircraft)
    {
        $this->aircraft = array_diff($this->aircraft, [$aircraft]);
    }
}
=======
<?php

namespace Symfony\Component\PropertyAccess\Tests;

class TestPluralAdderRemoverAndSetterSameSingularAndPlural
{
    private $aircraft = [];

    public function getAircraft()
    {
        return $this->aircraft;
    }

    public function setAircraft(array $aircraft)
    {
        $this->aircraft = ['plane'];
    }

    public function addAircraft($aircraft)
    {
        $this->aircraft[] = $aircraft;
    }

    public function removeAircraft($aircraft)
    {
        $this->aircraft = array_diff($this->aircraft, [$aircraft]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
