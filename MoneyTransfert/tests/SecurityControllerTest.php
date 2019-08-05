<?php

namespace App\Tests;
use Symfony\Component\Security\Core\Encoder\SodiumPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    /* public function testRegister()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "username":"mikaell",
            "password":"123",
            "nomComplet":"malick",
            "adresse":"mbour",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "profil":"admin",
            "status":"debloquer",
            "partenaire":61,
            "bankAccount":3,
            "updated_at":"2019-08-02 09:05:37",
            "imageName":""

        }'
    
    );
    $reponse=$client->getResponse();
    var_dump($reponse);
        $this->assertSame(201,$reponse->getStatusCode());
    } */

 /*    public function testAjoutKo()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/register',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "username":"mayam",
            "password":"123",
            "nomComplet":"binetou",
            "adresse":"mbour",
            "telephone":"2214478920",
            "email":"malick@malick.fr",
            "profil":"admin",
            "status":"debloquer",
            "updated_at":"2019-08-02 09:05:37",
            "partenaire":"60",
            "bankAccount":"2",
            "imageName":""
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    } */

    public function testListAction()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('GET', '/api/users',[],[],
        ['CONTENT_TYPE'=>"application/json"]
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(200,$reponse->getStatusCode());
    }
}
