<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle;

use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Model\ComunicationCollection;
use AppBundle\Model\Comunication;
use AppBundle\Service\Http;
use AppBundle\Service\Parser;

class CallManager
{

    /** @var array comunications */
    protected $comunications;

    private $logUrl;

    private $connection;
    private $parser;


    public function __construct( )
    {
        $this->comunications = new ComunicationCollection();
        $this->connection = new Http();
        $this->parser = new Parser();
        $this->logUrl = "https://gist.githubusercontent.com/rodrigm/8d9c2f79d637c4e0673c85f1da365ae3/raw/16ccd81dbaa895d44ac05190626de84169722700/communications.611222333.log";

    }

    private function flush()
    {

    }
    private function update()
    {
		if(empty($this->comunications->getComunications())){
            $response = $this->connection->performRequest($this->logUrl);
            $parsedResponse =  explode("\n", $response);
            foreach ($parsedResponse as $parsedLine ) {
                if(substr($parsedLine, 0, 1) == "C" || substr($parsedLine, 0, 1) == "S" ){
                    $comunication = $this->parser->parseComunication($parsedLine);
                    $this->comunications->addComunication($comunication);      
                }                                           
            }
        }
    }

    public function fecthComunications()
    {
        $this->update();
        return $this->comunications->getContactedNumbers();
    }

    public function getComunication($id)
    {
        $this->update();
        $comunications = $this->comunications->getComunicationsByNumber($id);
        if (empty($comunications)) {
            throw $this->UserNotFoundException("Note does not exist.");
        }
        return $comunications->getComunications();
    }
}
