<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle;

use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Model\ComunicationCollection;
use AppBundle\Model\Comunication;
use AppBundle\Service\Http;
use AppBundle\Service\Parser;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Default Manager for comunications
 *
 * @package AppBundle\
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class CallManager
{

    /**
     * @var Comunication[]
     */
    protected $comunications;

    /**
     * @var string
     */
    private $logUrl;

    /**
     * @var \AppBundle\Service\Http;
     */
    private $connection;

    /**
     * @var \AppBundle\Service\Parser;
     */
    private $parser;

    public function __construct()
    {
        $this->comunications = new ComunicationCollection();
        $this->connection = new Http();
        $this->parser = new Parser();
        $this->logUrl = "https://gist.githubusercontent.com/rodrigm/8d9c2f79d637c4e0673c85f1da365ae3/raw/16ccd81dbaa895d44ac05190626de84169722700/communications.611222333.log";
    }

    /**
     *
     * Method to update the array comunication
     *
     * @param  boolean $force
     */
    private function update($force)
    {
        if (empty($this->comunications->getComunications())) {
            $response = $this->connection->performRequest($this->logUrl, $force);
            $parsedResponse = explode("\n", $response);
            foreach ($parsedResponse as $parsedLine) {
                if (substr($parsedLine, 0, 1) == "C" || substr($parsedLine, 0, 1) == "S") {
                    $comunication = $this->parser->parseComunication($parsedLine);
                    $this->comunications->addComunication($comunication);
                }
            }
        }
    }

    /**
     *
     * Method to fetch all the comunications
     *
     * @return array
     */
    public function fecthComunications()
    {
        $this->update(false);
        return $this->comunications->getContactedNumbers();
    }

    /**
     *
     * Method to get all the comunication given a nº
     *
     * @param  int $number
     * @return array;
     */
    public function getComunication($id)
    {
        $this->update(false);
        $comunications = $this->comunications->getComunicationsByNumber($id);
        return $comunications->getComunications();
    }
}
