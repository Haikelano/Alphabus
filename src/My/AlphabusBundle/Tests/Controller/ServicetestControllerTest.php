<?php

namespace My\AlphabusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServicetestControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testNewtest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/newtest');
    }

    public function testRechtest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rechtest');
    }

}
