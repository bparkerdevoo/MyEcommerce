<?php

namespace MSF\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProduitsControllerTest extends WebTestCase
{
    public function testProduits()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Produits');
    }

    public function testPresentation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/presentation');
    }

    public function testPersonalisation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/personalisation');
    }

    public function testComposition()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/composition');
    }

}
