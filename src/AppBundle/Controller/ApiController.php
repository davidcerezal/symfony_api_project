<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;
use AppBundle\CallManager;


class ApiController extends FOSRestController
{


    /**
     * return \AppBundle\NoteManager
     */
    public function getCallManager()
    {
        return $this->get('AppBundle\CallManager');
    }

    /**
     *
     *
     *@Annotations\View()
     *@return array
     */
    public function getCallsAction()
    {
        return $this->getCallManager()->fecthComunications();
    }

    /**
     *
     * @param int $id the note id
     * @throws NotFoundHttpException when note not exist
     *@Annotations\View()
     *@return array
     */
    public function getCallAction($id)
    {
        $logger = $this->getCallManager();
        try {
            $communications = $logger->getComunication($id);
        } catch (\UserNotFoundException $e) {
            throw $this->createNotFoundException();
        }
        return $communications;
    }
}
