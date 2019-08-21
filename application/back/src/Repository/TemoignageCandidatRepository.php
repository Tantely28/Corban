<?php

namespace App\Repository;

use App\Entity\TemoignageCandidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TemoignageCandidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemoignageCandidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemoignageCandidat[]    findAll()
 * @method TemoignageCandidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemoignageCandidatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TemoignageCandidat::class);
    }

    public function findTem($candidat){
        return $this->createQueryBuilder('t')
            ->andHaving('t.candidat = :val')
            ->setParameter('val', $candidat)
            ->orderBy('t.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
//
//    public function findVideo($candidat){
//        return $this->createQueryBuilder('t')
//            ->andHaving('t.candidat = :val')
//            ->setParameter('val', $candidat)
//            ->getQuery()
//            ->getResult();
//    }

    // /**
    //  * @return TemoignageCandidat[] Returns an array of TemoignageCandidat objects
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
    public function findOneBySomeField($value): ?TemoignageCandidat
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
