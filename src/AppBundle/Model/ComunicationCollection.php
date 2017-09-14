<?php
namespace AppBundle\Model;

use AppBundle\Model\Comunication;

/**
 * Default class for a comunication collection
 *
 * @package AppBundle\Model
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
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
     * @param Comunication[] $Comunication
     * @param integer $offset
     * @param integer $limit
     */
    public function __construct($comunication = array(), $offset = null, $limit = null)
    {
        $this->comunications = $comunication;
        $this->offset = $offset;
        $this->limit = $limit;

    }

    /**
     *
     * Method to add a comunication to the comunication collection
     *
     * @param  \AppBundle\Model\Comunication
     */
    public function addComunication($comunication = null)
    {
        $comunications = $this->getComunications();
        $comunications[] = $comunication;
        $this->comunications = $comunications;
    }

    /**
     *
     * Method to get the comunications
     *
     * @return array
     */
    public function getComunications()
    {
        return $this->comunications;
    }

    /**
     *
     * Method to get the contacted numbers
     *
     * @return array
     */
    public function getContactedNumbers()
    {
        $contactedNumbers = array();
        $comunications = $this->getComunications();
        foreach ($comunications as $comunication) {
            if (!in_array($comunication->getContactedNumber(), $contactedNumbers)) {
                $contactedNumbers[] = $comunication->getContactedNumber();
            }
        }
        return $contactedNumbers;
    }

    /**
     *
     * Method to get the comunication by number
     *
     * @param  int $id
     * @return array
     */
    public function getComunicationsByNumber($id)
    {
        $contactedComunications = new ComunicationCollection();
        $comunications = $this->getComunications();
        foreach ($comunications as $comunication) {
            if ($comunication->getNumberSender() == $id || $comunication->getNumberReciever() == $id) {
                $contactedComunications->addComunication($comunication);
            }
        }
        return $contactedComunications;
    }

}