<?php

namespace MyScentFactory\MSFBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FactoryControllerTest extends WebTestCase
{
    public function testCustom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Custom');
    }

}
