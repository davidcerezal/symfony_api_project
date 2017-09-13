<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle;

use FOS\RestBundle\Controller\FOSRestController;

class CallManager
{

    /** @var array notes */
    protected $data = array();


    public function __construct( )
    {
        $this->data=array();

    }

    private function flush()
    {

    }

    public function fecth($limit = 50, $offset = 0)
    {
        return "hola";
    }

    public function get($id)
    {
        if (!isset($this->data[$id])) {
            return false;
        }
        return $this->data[$id];
    }
}
