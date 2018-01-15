<?php

namespace MSF\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FormulaireControllerTest extends WebTestCase
{
    public function testFormtest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/FormTest');
    }

}
