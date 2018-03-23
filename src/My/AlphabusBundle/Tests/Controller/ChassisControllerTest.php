<?php

namespace My\AlphabusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChassisControllerTest extends WebTestCase
{
    public function testAddchassis()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addchassis');
    }

    public function testEditchassis()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editchassis');
    }

    public function testListchassis()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listchassis');
    }

    public function testDelchassis()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delchassis');
    }

    public function testCherchassis()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cherchassis');
    }

}
