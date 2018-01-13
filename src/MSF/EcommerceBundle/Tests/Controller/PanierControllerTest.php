<?php

namespace MSF\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PanierControllerTest extends WebTestCase
{
    public function testPanier()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/panier');
    }

    public function testLivraison()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/livraison');
    }

    public function testValidation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/validation');
    }

}
