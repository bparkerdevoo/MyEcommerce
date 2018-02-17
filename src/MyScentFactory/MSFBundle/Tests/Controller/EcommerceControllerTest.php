<?php

namespace MyScentFactory\MSFBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EcommerceControllerTest extends WebTestCase
{
    public function testProduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Produit');
    }

    public function testCommande()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Commande');
    }

    public function testMedia()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Media');
    }

    public function testPanier()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Panier');
    }

}
