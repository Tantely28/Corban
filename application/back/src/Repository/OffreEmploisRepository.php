<?php

namespace App\Repository;

use App\Entity\OffreEmplois;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OffreEmplois|null find($id, $lockMode = null, $lockVersion = null)
 * @method OffreEmplois|null findOneBy(array $criteria, array $orderBy = null)
 * @method OffreEmplois[]    findAll()
 * @method OffreEmplois[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OffreEmploisRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OffreEmplois::class);
    }

    public function findOffre()
    {
        return $this->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }
    public function findOffreOne($id)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return OffreEmplois[] Returns an array of OffreEmplois objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OffreEmplois
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
