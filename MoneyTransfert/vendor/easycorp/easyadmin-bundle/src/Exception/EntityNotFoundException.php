<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Exception;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EntityNotFoundException extends BaseException
{
    public function __construct(array $parameters = [])
    {
        $exceptionContext = new ExceptionContext(
            'exception.entity_not_found',
            \sprintf('The "%s" entity with "%s = %s" does not exist in the database. The entity may have been deleted by mistake or by a "cascade={"remove"}" operation executed by Doctrine.', $parameters['entity_name'], $parameters['entity_id_name'], $parameters['entity_id_value']),
            $parameters,
            404
        );

        parent::__construct($exceptionContext);
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Exception;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class EntityNotFoundException extends BaseException
{
    public function __construct(array $parameters = [])
    {
        $exceptionContext = new ExceptionContext(
            'exception.entity_not_found',
            \sprintf('The "%s" entity with "%s = %s" does not exist in the database. The entity may have been deleted by mistake or by a "cascade={"remove"}" operation executed by Doctrine.', $parameters['entity_name'], $parameters['entity_id_name'], $parameters['entity_id_value']),
            $parameters,
            404
        );

        parent::__construct($exceptionContext);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
