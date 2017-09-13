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
     */
    public function getCallsAction()
    {
        return $this->getCallManager()->fecth();
    }

    /**
     *
     * @throws NotFoundHttpException when note not exist
     */
    public function getCallAction($id)
    {
        $logger = $this->getCallManager();
        try {
            $communications = $logger->get($id);
        } catch (\UserNotFoundException $e) {
            throw $this->createNotFoundException();
        }
        return $communications;
    }
}
