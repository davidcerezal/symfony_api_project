<?php
namespace AppBundle\Model;
use AppBundle\Model\Comunication;
class ComunicationCollection
{
    /**
     * @var Comunication[]
     */
    public $comunications;
    
     /**
     * @var integer
     */
    public $offset;
    /**
     * @var integer
     */
    public $limit;

    /**
     * @param Note[]  $notes
     * @param integer $offset
     * @param integer $limit
     */
    public function __construct($comunication = array(), $offset = null, $limit = null)
    {
        $this->comunications = $comunication;
         $this->offset = $offset;
        $this->limit = $limit;

    }
    public function addComunication($comunication = null){
        $comunications = $this->getComunications();
        $comunications[] = $comunication;
        $this->comunications =  $comunications ;
    }
    public function getComunications(){
        return $this->comunications;
    }
    public function getContactedNumbers(){
        $contactedNumbers = array();
        $comunications = $this->getComunications();
        foreach ($comunications as $comunication) {
            if(!in_array($comunication->getContactedNumber(), $contactedNumbers)){
            $contactedNumbers[] = $comunication->getContactedNumber();
        }
        }
        return $contactedNumbers;
    }
    public function getComunicationsByNumber($id){
        $contactedComunications = new ComunicationCollection();
        $comunications = $this->getComunications();
        foreach ($comunications as $comunication) {
            if($comunication->getNumberSender() == $id ||$comunication->getNumberReciever() == $id ){
                $contactedComunications->addComunication($comunication);
            }
        }
        return $contactedComunications;
    }
    
}