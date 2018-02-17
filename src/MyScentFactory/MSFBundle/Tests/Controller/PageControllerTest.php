<?php

namespace MyScentFactory\MSFBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testCatalogue()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Catalogue');
    }

    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Accueil');
    }

    public function testApropos()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Apropos');
    }

    public function testCondition()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Condition');
    }

    public function testBlog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Blog');
    }

}
