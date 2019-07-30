<?php

namespace App\Tests;
use Symfony\Component\Security\Core\Encoder\SodiumPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
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
            "username":"malika",
            "password":"123",
            "nomComplet":"malick",
            "adresse":"mbour",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "profil":"admin",
            "status":"debloquer",
            "partenaire":31

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(201,$reponse->getStatusCode());
    }

    public function testAjoutKo()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'bbb',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "username":"mayrame",
            "password":"123",
            "nomComplet":"binetou",
            "adresse":"mbour",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "profil":"admin",
            "status":"debloquer",
            "partenaire":"30"
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    }
}
