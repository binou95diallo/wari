<?php

namespace App\Repository;

use App\Entity\BankAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BankAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method BankAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method BankAccount[]    findAll()
 * @method BankAccount|null findAllPartCompte
 * @method BankAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BankAccountRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BankAccount::class);
    }

    // /**
    //  * @return BankAccount[] Returns an array of BankAccount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BankAccount
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findByPartId($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.partenaire = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllPartCompte($value): BankAccount
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('b')
            ->andWhere('b.partenaire = :id')
            ->setParameter('id', $value)
            ->orderBy('b.id', 'ASC')
            ->getQuery()
            ->getResult();

       return  $qb->execute();
    }

    public function findPartCompte($value): BankAccount
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('b')
            ->andWhere('b.partenaire = :id')
            ->setParameter('id', $value)
            ->orderBy('b.id', 'ASC')
            ->getQuery();

        $qb->execute();

        // to get just one result:
        return   $qb->setMaxResults(1)->getOneOrNullResult();
    }
    
}
