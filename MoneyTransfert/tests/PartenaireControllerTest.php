<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    /* public function testAjout()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/partenaire/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "nomComplet":"Diye",
            "adresse":"mbour",
            "ninea":"QSDQRTZ11478bb",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "raisonSocial":"SA",
            "numeroCompte":"ab14569",
            "solde":15000000

        }'
    
    );
    $reponse=$client->getResponse();
    var_dump($reponse);
        $this->assertSame(302,$reponse->getStatusCode());
    } */

/* public function testShow()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binou',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('GET', '/api/partenaire/61',[],[],
        ['CONTENT_TYPE'=>"application/json"]
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(200,$reponse->getStatusCode());
    } */
}