<?php
namespace AppBundle\Service;

use AppBundle\Model\Comunication;

class Parser
{    
    public function parseComunication($parsedLine)
    {
    	$type = substr($parsedLine, 0, 1);
        $call_number_sender = substr($parsedLine, 1, 9);
        $call_number_reciever = substr($parsedLine, 10, 9);
        $is_send_reviece = substr($parsedLine, 19, 1);
        $name = substr($parsedLine, 20, 24);
        $datetime = substr($parsedLine, 44, 14);
      
        $duration = substr($parsedLine, 58, 6);
    

        $comunication = new Comunication($type,
                                    $call_number_sender,
                                    $call_number_reciever,
                                    $is_send_reviece,
                                    $name,
                                    $datetime,
                                    $duration);
                                    
          
        return $comunication;
    }
}