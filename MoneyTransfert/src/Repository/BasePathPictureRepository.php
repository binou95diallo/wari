<?php

namespace App\Repository;

use App\Entity\BasePathPicture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BasePathPicture|null find($id, $lockMode = null, $lockVersion = null)
 * @method BasePathPicture|null findOneBy(array $criteria, array $orderBy = null)
 * @method BasePathPicture[]    findAll()
 * @method BasePathPicture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BasePathPictureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BasePathPicture::class);
    }

    // /**
    //  * @return BasePathPicture[] Returns an array of BasePathPicture objects
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
    public function findOneBySomeField($value): ?BasePathPicture
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
