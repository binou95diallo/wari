<?php

namespace App\Repository;

use App\Entity\Recepteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Recepteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recepteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recepteur[]    findAll()
 * @method Recepteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecepteurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Recpteur::class);
    }

    // /**
    //  * @return Recepteur[] Returns an array of Recpteur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Recpteur
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
