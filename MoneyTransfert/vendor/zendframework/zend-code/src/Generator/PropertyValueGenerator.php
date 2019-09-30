<<<<<<< HEAD
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Code\Generator;

class PropertyValueGenerator extends ValueGenerator
{
    protected $arrayDepth = 1;

    /**
     * @return string
     */
    public function generate()
    {
        return parent::generate() . ';';
    }
}
=======
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Code\Generator;

class PropertyValueGenerator extends ValueGenerator
{
    protected $arrayDepth = 1;

    /**
     * @return string
     */
    public function generate()
    {
        return parent::generate() . ';';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
