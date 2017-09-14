<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;
use AppBundle\CallManager;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Default controller controller for comunications
 *
 * @package AppBundle\Controller
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class ApiController extends FOSRestController
{

    /**
     * return \AppBundle\CallManager
     */
    public function getCallManager()
    {
        return $this->get('AppBundle\CallManager');
    }


    /**
     * List all comunicated nº
     *
     * @ApiDoc(
     *   output = "AppBundle\Model\ComunicationCollections",
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when provided token is incorrect",
     *   }
     * )
     *
     * @Annotations\View()
     *
     * @return array
     */
    public function getCallsAction()
    {
        return $this->getCallManager()->fecthComunications();
    }

    /**
     *  List all comunications of a nº
     *
     * @ApiDoc(
     *   resource = true,
     *   output = "AppBundle\Model\ComunicationCollections",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when provided token is incorrect",
     *     404 = "Returned when not found"
     *   }
     * )
     *
     * @param int $id the user nº
     *
     * @return array
     *
     * @throws NotFoundHttpException when does not exist
     *
     * @Annotations\View()
     *
     */
    public function getCallAction($id)
    {
        $communications =  $this->getCallManager()->getComunication($id);
        if ($communications == []) {
            throw new NotFoundHttpException("Nº does not exist.");
        }
        return $communications;
    }
}
