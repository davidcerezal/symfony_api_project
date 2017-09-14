<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('POST', '/api/getCalls');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //here should continue all the test
    }
}
