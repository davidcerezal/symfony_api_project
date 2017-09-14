<?php
namespace AppBundle\Service;

use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Default class to process the Http request based in curl
 *
 * @package AppBundle\Service\Http
 * @author David Cerezal <david.cerezal77@gmail.com>
 */
class Http
{
    /**
     *
     * Method to process the Http request based in curl
     *
     * @param  string $URl
     * @param  boolean $force
     *
     * @return string
     */
    public function performRequest($siteUrl, $force)
    {
        $cache = new FilesystemAdapter();

        // create a new item getting it from the cache
        $log_request = $cache->getItem('app.log_request');
        $log_performed = $cache->getItem('app.log_performed');
        $performed = $log_performed->get();

        //see if it's cached the response and perform the request if not
        if ($performed == 1 || $force == true) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $siteUrl);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);
            if (curl_errno($ch)) {
                return false;
            }
            curl_close($ch);

            $log_request->set($response);
            $log_performed->set(1);
            $cache->save($log_request);
            $cache->save($log_performed);
        } else {
            $response = $log_request->get();
        }
        return $response;
    }
}