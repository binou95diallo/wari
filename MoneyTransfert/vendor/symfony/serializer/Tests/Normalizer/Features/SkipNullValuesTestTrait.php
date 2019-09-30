<<<<<<< HEAD
<?php

namespace Symfony\Component\Serializer\Tests\Normalizer\Features;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Test AbstractObjectNormalizer::SKIP_NULL_VALUES.
 */
trait SkipNullValuesTestTrait
{
    abstract protected function getNormalizerForSkipNullValues(): NormalizerInterface;

    public function testSkipNullValues()
    {
        $dummy = new ObjectDummy();
        $dummy->bar = 'present';

        $normalizer = $this->getNormalizerForSkipNullValues();
        $result = $normalizer->normalize($dummy, null, ['skip_null_values' => true]);
        $this->assertSame(['fooBar' => 'present', 'bar' => 'present'], $result);
    }
}
=======
<?php

namespace Symfony\Component\Serializer\Tests\Normalizer\Features;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Test AbstractObjectNormalizer::SKIP_NULL_VALUES.
 */
trait SkipNullValuesTestTrait
{
    abstract protected function getNormalizerForSkipNullValues(): NormalizerInterface;

    public function testSkipNullValues()
    {
        $dummy = new ObjectDummy();
        $dummy->bar = 'present';

        $normalizer = $this->getNormalizerForSkipNullValues();
        $result = $normalizer->normalize($dummy, null, ['skip_null_values' => true]);
        $this->assertSame(['fooBar' => 'present', 'bar' => 'present'], $result);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
