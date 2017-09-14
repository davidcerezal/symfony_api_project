<?php
namespace AppBundle\Model;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

/**
 * Default class for a comunication
 *
 * @package AppBundle\Model
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class Comunication
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $call_number_sender;

    /**
     * @var int
     */
    public $call_number_reciever;

    /**
     * @var string
     */
    public $is_send_reviece;

    /**
     * @var string
     */
    public $name;

    /**
     * @var \datetime
     */
    public $datetime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var int
     */
    public $version = 1;

    public function __construct($type = null,
                                $call_number_sender = null,
                                $call_number_reciever = null,
                                $is_send_reviece = null,
                                $name = null,
                                $datetime = null,
                                $duration = null)
    {
        $this->type = $type;
        $this->call_number_sender = $call_number_sender;
        $this->call_number_reciever = $call_number_reciever;
        $this->is_send_reviece = $is_send_reviece;
        $this->name = $name;
        $this->datetime = $datetime;
        $this->duration = $duration;
    }

    /**
     *
     * Method to get the contacted number
     *
     * @return int
     */
    public function getContactedNumber()
    {
        if ($this->is_send_reviece == "Entrante") {
            return $this->call_number_sender;
        } else {
            return $this->call_number_reciever;
        }
    }

    /**
     *
     * Method to get the number sender
     *
     * @return int
     */
    public function getNumberSender()
    {
        return $this->call_number_sender;
    }

    /**
     *
     * Method to get the number reciever
     *
     * @return int
     */
    public function getNumberReciever()
    {
        return $this->call_number_reciever;
    }

}