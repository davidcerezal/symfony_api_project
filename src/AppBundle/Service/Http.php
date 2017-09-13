<?php
namespace AppBundle\Service;

class Http
{    
    public function performRequest($siteUrl)
    {
        $ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $siteUrl);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);
        return $response;
    }
}