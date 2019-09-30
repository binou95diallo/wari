<<<<<<< HEAD
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
            "nomComplet":"Diana",
            "adresse":"mbour",
            "ninea":"ger147",
            "telephone":"2214478920",
            "email":"diana@diana.fr",
            "raisonSocial":"SA",
            "solde":15000000

        }'
    
    );
    $reponse=$client->getResponse();
    var_dump($reponse);
        $this->assertSame(302,$reponse->getStatusCode());
    }

public function testShow()
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
    }
=======
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
            "nomComplet":"Diana",
            "adresse":"mbour",
            "ninea":"ger147",
            "telephone":"2214478920",
            "email":"diana@diana.fr",
            "raisonSocial":"SA",
            "solde":15000000

        }'
    
    );
    $reponse=$client->getResponse();
    var_dump($reponse);
        $this->assertSame(302,$reponse->getStatusCode());
    }

public function testShow()
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
    }
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}