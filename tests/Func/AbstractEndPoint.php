<?php

namespace App\tests\Func;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class AbstractEndPoint extends WebTestCase
{
    private $serverInformation = ['ACCEPT' => 'application/json', 'CONTENT_TYPE' => 'application/json'];

    public function getResponseFromRequest($method, $uri, $payLoad = ''): Response
    {
        $client = self::createClient();

        $client->request(
           $method,
           $uri . 'json',
           [],
           [],
           $this->serverInformation,
           $payLoad
        );    

        return $client->getResponse();
    }
}