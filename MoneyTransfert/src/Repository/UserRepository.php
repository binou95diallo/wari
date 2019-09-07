<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method countByUsername()[]
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findOneByUsername($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function findUserPart($value,$username)
    {
        return $this->createQueryBuilder('u')
            ->where('u.username!=:val1')
            ->andWhere('u.partenaire= :val')
            ->setParameter('val', $value)
            ->setParameter('val1', $username)
            ->orderBy('u.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findCaissierOrAdminP(){
        {
            return $this->createQueryBuilder('u')
                ->where('u.profil =:val')
                ->orWhere('u.profil=:val1')
                ->setParameter('val', "caissier")
                ->setParameter('val1', "adminPartenaire")
                ->orderBy('u.id', 'ASC')
                ->getQuery()
                ->getResult()
            ;
        }
    }

    public function countByUsername()
{
    $qb = $this->createQueryBuilder('u')
          ->andWhere('u.profil = :val')
          ->setParameter('val',"admin");
 
    $qb ->select($qb->expr()->count('u'));
 
    return (int) $qb->getQuery()->getSingleScalarResult();
}
public function findById($id)
{
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
        SELECT username,status FROM user as u
        WHERE u.partenaire_id ='.$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // returns an array of arrays (i.e. a raw data set)
    return $stmt;
}

/*
*Retourne le partenaire qui vient d'être enregistré 
 */
public function findLastUser(): User
{
    $qb=$this->createQueryBuilder('u')
        ->select('u')
        ->orderBy('u.id', 'DESC')
        ->getQuery()
    ;
    $qb->execute();
    return   $qb->setMaxResults(1)->getOneOrNullResult();
}


}
