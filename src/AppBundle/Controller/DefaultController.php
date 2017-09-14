<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Default controller controller for index
 *
 * @package AppBundle\Controller
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * Index action
     *
     * @ApiDoc(
     *  resource=false,
     * )
     * @Route("/")
     *
     */
    public function indexAction(Request $request)
    {
        return $this->render('/base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }
}
