<?php
namespace AppBundle\Model;
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
     * @var int
     */
    public $is_send_reviece;
    /**
     * @var string
     */
    public $name;
    /**
     * @var datetime
     */
    public $datetime;
    /**
     * @var datetime
     */
    public $duration;
    /**
     * @var da 
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
 
    
    public function getContactedNumber(){
        if($this->is_send_reviece){
            return $this->call_number_sender;
        }else{
            return $this->call_number_reciever;
        }
    }
    public function getNumberSender(){
        return $this->call_number_sender;
       
        
    }
    public function getNumberReciever(){
      
        return $this->call_number_reciever;
        
    }
    
}