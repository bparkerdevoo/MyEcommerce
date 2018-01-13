<?php

namespace MSF\PagesBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/page');
    }

    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/accueil');
    }

}
