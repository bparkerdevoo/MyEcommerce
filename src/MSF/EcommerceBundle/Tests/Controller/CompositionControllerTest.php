<?php

namespace MSF\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CompositionControllerTest extends WebTestCase
{
    public function testCompose()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/composition');
    }

}
