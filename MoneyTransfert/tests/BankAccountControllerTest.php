<<<<<<< HEAD
<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BankAccountControllerTest extends WebTestCase
{
   /*  public function testAjout()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "solde":5000000,
            "partenaire":60

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(201,$reponse->getStatusCode());
    } */

    /* public function testAjoutKo()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "numeroCompte":"ma0147555a",
            "solde":"4000000",
            "partenaire":61
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    } */
    public function testShow()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('GET', '/api/bankAccount/3',[],[],
        ['CONTENT_TYPE'=>"application/json"]
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(200,$reponse->getStatusCode());
    }
   
}
=======
<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BankAccountControllerTest extends WebTestCase
{
   /*  public function testAjout()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "solde":5000000,
            "partenaire":60

        }'
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(201,$reponse->getStatusCode());
    } */

    /* public function testAjoutKo()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('POST', '/api/bankAccount/ajout',[],[],
        ['CONTENT_TYPE'=>"application/json"],
        '{
            "numeroCompte":"ma0147555a",
            "solde":"4000000",
            "partenaire":61
        }');
        $rep=$client->getResponse();
        var_dump($rep);
        $this->assertSame(201,$client->getResponse()->getStatusCode());
    } */
    public function testShow()
    {
        $client = static::createClient([],[
            'PHP_AUTH_USER' => 'binousha',
            'PHP_AUTH_PW'   => '123',
        ]);
        $crawler = $client->request('GET', '/api/bankAccount/3',[],[],
        ['CONTENT_TYPE'=>"application/json"]
    
    );
    $reponse=$client->getResponse();
        $this->assertSame(200,$reponse->getStatusCode());
    }
   
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
