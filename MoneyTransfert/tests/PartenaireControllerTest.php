<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'bbb',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "matricule":"45621",
            "nomComplet":"Binetou",
            "adresse":"mbour",
            "ninea":"QSDQRTZ12",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "raisonSocial":"SA"

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(401,$reponse->getStatusCode());
    }
}

