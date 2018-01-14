<?php

namespace MSF\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AddProduitControllerTest extends WebTestCase
{
    public function testAjoutproduit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajoutProduit');
    }

}
