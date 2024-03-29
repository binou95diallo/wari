<<<<<<< HEAD
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Controller to test serialization of various errors and exceptions.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
class SerializerErrorController extends AbstractController
{
    /**
     * @View
     */
    public function logicExceptionAction()
    {
        throw new \LogicException('Something bad happened.');
    }

    /**
     * @View
     */
    public function unknownExceptionAction()
    {
        throw new \OutOfBoundsException('Unknown exception message.');
    }

    /**
     * @View
     */
    public function invalidFormAction()
    {
        // BC hack for Symfony 2.7 where FormType's didn't yet get configured via the FQN
        $formType = method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')
            ? 'Symfony\Component\Form\Extension\Core\Type\TextType'
            : 'text'
        ;

        $form = $this->createFormBuilder(null, [
            'csrf_protection' => false,
        ])->add('name', $formType, [
            'constraints' => [new NotBlank()],
        ])->getForm();

        $form->submit([]);

        return $form;
    }
}
=======
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Controller to test serialization of various errors and exceptions.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
class SerializerErrorController extends AbstractController
{
    /**
     * @View
     */
    public function logicExceptionAction()
    {
        throw new \LogicException('Something bad happened.');
    }

    /**
     * @View
     */
    public function unknownExceptionAction()
    {
        throw new \OutOfBoundsException('Unknown exception message.');
    }

    /**
     * @View
     */
    public function invalidFormAction()
    {
        // BC hack for Symfony 2.7 where FormType's didn't yet get configured via the FQN
        $formType = method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')
            ? 'Symfony\Component\Form\Extension\Core\Type\TextType'
            : 'text'
        ;

        $form = $this->createFormBuilder(null, [
            'csrf_protection' => false,
        ])->add('name', $formType, [
            'constraints' => [new NotBlank()],
        ])->getForm();

        $form->submit([]);

        return $form;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
