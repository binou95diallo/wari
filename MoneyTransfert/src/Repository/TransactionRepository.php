<?php

namespace App\Repository;

use App\Entity\Transaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Transaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transaction[]    findAll()
 * @method Transaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    // /**
    //  * @return Transaction[] Returns an array of Transaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transaction
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findOneByCode($value): ?Transaction
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.code = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findUserOp($value){
        
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT username,montant,date_transaction,type FROM user as u, transaction as t, partenaire as p
            WHERE p.id='.$value.' AND p.id=u.partenaire_id AND u.id = t.user_id
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    
        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function countByCode($value)
    {
        $qb = $this->createQueryBuilder('t')
              ->andWhere('t.code = :val')
              ->setParameter('val',$value);
     
        $qb ->select($qb->expr()->count('t'));
     
        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function findTransactCode($value): Transaction
    {
        // automatically knows to select Products
        // the "p" is an alias you'll use in the rest of the query
        $qb = $this->createQueryBuilder('t')
            ->andWhere('t.code = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'DESC')
            ->getQuery();

        $qb->execute();

        // to get just one result:
        return   $qb->setMaxResults(1)->getOneOrNullResult();
    }
}
