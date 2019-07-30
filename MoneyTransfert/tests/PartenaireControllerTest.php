<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PartenaireControllerTest extends WebTestCase
{
    public function testAjout()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/partenaire/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "matricule":"ma1596",
            "nomComplet":"malick",
            "adresse":"mbour",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "ninea":"sacv1156",
            "raisonSocial":"SAShop"

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(201,$reponse->getStatusCode());
    }
}
