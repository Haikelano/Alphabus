<?php

namespace My\AlphabusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testRech()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rech');
    }

}
