<?php

namespace ProjectBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testOne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/one');
    }

    public function testTwo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/two');
    }

}
