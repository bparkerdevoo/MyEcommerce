<?php

namespace MyScentFactory\MSFBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientControllerTest extends WebTestCase
{
    public function testConnexion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Connexion');
    }

}
