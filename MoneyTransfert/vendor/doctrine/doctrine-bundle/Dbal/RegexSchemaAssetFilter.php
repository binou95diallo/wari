<<<<<<< HEAD
<?php

namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private $filterExpression;

    public function __construct(string $filterExpression)
    {
        $this->filterExpression = $filterExpression;
    }

    public function __invoke($assetName) : bool
    {
        if ($assetName instanceof AbstractAsset) {
            $assetName = $assetName->getName();
        }

        return preg_match($this->filterExpression, $assetName);
    }
}
=======
<?php

namespace Doctrine\Bundle\DoctrineBundle\Dbal;

use Doctrine\DBAL\Schema\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private $filterExpression;

    public function __construct(string $filterExpression)
    {
        $this->filterExpression = $filterExpression;
    }

    public function __invoke($assetName) : bool
    {
        if ($assetName instanceof AbstractAsset) {
            $assetName = $assetName->getName();
        }

        return preg_match($this->filterExpression, $assetName);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
