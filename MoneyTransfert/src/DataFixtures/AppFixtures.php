<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AppFixtures extends Fixture
{
    private $encoder;


public function __construct(UserPasswordEncoderInterface $encoder)
{
    $this->encoder = $encoder;
}
    public function load(ObjectManager $manager)
{
    $user = new User();
    $user->setUsername('binousha');
    $user->setNomComplet('binetou');
    $user->setAdresse('fann');
    $user->setTelephone('2217711230000');
    $user->setStatus('debloquer');
    $user->setProfil('user');
    $user->setEmail('binou@gmail.com');
    $user->setRoles(["ROLE_USER"]);
    $user->setUpdatedAt(new \DateTime('now'));
    $user->setImageName('/home/binetou/Images/afro1.jpg');
    $password = $this->encoder->encodePassword($user, '123');
    $user->setPassword($password);

    $manager->persist($user);
    $manager->flush();
}

}
