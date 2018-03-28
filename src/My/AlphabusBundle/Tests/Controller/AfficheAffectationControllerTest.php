<?php

namespace My\AlphabusBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AfficheAffectationControllerTest extends WebTestCase
{
    public function testListaffectations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listaffectations');
    }

    public function testCheraffectations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cheraffectations');
    }

}
