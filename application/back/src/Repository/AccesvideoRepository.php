<?php

namespace App\Repository;

use App\Entity\Accesvideo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Accesvideo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accesvideo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accesvideo[]    findAll()
 * @method Accesvideo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccesvideoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Accesvideo::class);
    }

    // /**
    //  * @return Accesvideo[] Returns an array of Accesvideo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Accesvideo
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
