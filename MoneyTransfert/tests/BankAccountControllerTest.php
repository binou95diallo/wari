<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BankAccountControllerTest extends WebTestCase
{
    public function testAjout()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "numeroCompte":"ma01475",
            "solde":5000000,
            "partenaire":41

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(201,$reponse->getStatusCode());
    }

    public function testAjoutKo()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "numeroCompte":"ma0147555",
            "solde":"4000000",
            "partenaire":40
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
    public function testShow()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('GET', '/api/bankAccount/45',[],[],
        ['CONTENT_TYPE'=>"application/json"]
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(200,$reponse->getStatusCode());
    }
   
}
