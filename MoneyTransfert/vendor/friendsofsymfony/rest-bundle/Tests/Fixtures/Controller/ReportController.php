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

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ReportController.
 */
class ReportController extends AbstractController
{
    use ControllerTrait;

    public function getBillingSpendingsAction()
    {
    }

    /**
     * @Rest\Get("billing/spendings/{campaign}")
     */
    public function getBillingSpendingsByCampaignAction($campaign)
    {
    }

    public function getBillingPaymentsAction()
    {
    }

    public function getBillingEarningsAction()
    {
    }

    /**
     * @Rest\Get("billing/earnings/{platform}")
     */
    public function getBillingEarningsByPlatformAction($platform)
    {
    }

    public function getBillingWithdrawalsAction()
    {
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

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ReportController.
 */
class ReportController extends AbstractController
{
    use ControllerTrait;

    public function getBillingSpendingsAction()
    {
    }

    /**
     * @Rest\Get("billing/spendings/{campaign}")
     */
    public function getBillingSpendingsByCampaignAction($campaign)
    {
    }

    public function getBillingPaymentsAction()
    {
    }

    public function getBillingEarningsAction()
    {
    }

    /**
     * @Rest\Get("billing/earnings/{platform}")
     */
    public function getBillingEarningsByPlatformAction($platform)
    {
    }

    public function getBillingWithdrawalsAction()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
