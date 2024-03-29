<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\EventListener;

use EasyCorp\Bundle\EasyAdminBundle\Exception\BaseException;
use EasyCorp\Bundle\EasyAdminBundle\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Twig\Environment;

/**
 * This listener allows to display customized error pages in the production
 * environment.
 *
 * @internal
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ExceptionListener
{
    private $twig;
    private $easyAdminConfig;
    private $currentEntityName;

    public function __construct(Environment $twig, array $easyAdminConfig)
    {
        $this->twig = $twig;
        $this->easyAdminConfig = $easyAdminConfig;
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        if (!$exception instanceof BaseException) {
            return;
        }

        $this->currentEntityName = $event->getRequest()->query->get('entity');

        $event->setResponse($this->showExceptionPageAction(FlattenException::create($exception)));
    }

    public function showExceptionPageAction(FlattenException $exception)
    {
        $entityConfig = $this->easyAdminConfig['entities'][$this->currentEntityName] ?? null;
        $exceptionTemplatePath = $entityConfig['templates']['exception']
            ?? $this->easyAdminConfig['design']['templates']['exception']
            ?? '@EasyAdmin/default/exception.html.twig';
        $exceptionLayoutTemplatePath = $entityConfig['templates']['layout']
            ?? $this->easyAdminConfig['design']['templates']['layout']
            ?? '@EasyAdmin/default/layout.html.twig';

        return Response::create($this->twig->render($exceptionTemplatePath, [
            'exception' => $exception,
            'layout_template_path' => $exceptionLayoutTemplatePath,
        ]), $exception->getStatusCode());
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\EventListener;

use EasyCorp\Bundle\EasyAdminBundle\Exception\BaseException;
use EasyCorp\Bundle\EasyAdminBundle\Exception\FlattenException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Twig\Environment;

/**
 * This listener allows to display customized error pages in the production
 * environment.
 *
 * @internal
 *
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ExceptionListener
{
    private $twig;
    private $easyAdminConfig;
    private $currentEntityName;

    public function __construct(Environment $twig, array $easyAdminConfig)
    {
        $this->twig = $twig;
        $this->easyAdminConfig = $easyAdminConfig;
    }

    public function onKernelException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();
        if (!$exception instanceof BaseException) {
            return;
        }

        $this->currentEntityName = $event->getRequest()->query->get('entity');

        $event->setResponse($this->showExceptionPageAction(FlattenException::create($exception)));
    }

    public function showExceptionPageAction(FlattenException $exception)
    {
        $entityConfig = $this->easyAdminConfig['entities'][$this->currentEntityName] ?? null;
        $exceptionTemplatePath = $entityConfig['templates']['exception']
            ?? $this->easyAdminConfig['design']['templates']['exception']
            ?? '@EasyAdmin/default/exception.html.twig';
        $exceptionLayoutTemplatePath = $entityConfig['templates']['layout']
            ?? $this->easyAdminConfig['design']['templates']['layout']
            ?? '@EasyAdmin/default/layout.html.twig';

        return Response::create($this->twig->render($exceptionTemplatePath, [
            'exception' => $exception,
            'layout_template_path' => $exceptionLayoutTemplatePath,
        ]), $exception->getStatusCode());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
