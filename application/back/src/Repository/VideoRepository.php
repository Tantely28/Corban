<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Video::class);
    }

    public function findTem($candidat){
        return $this->createQueryBuilder('v')
            ->andHaving('v.candidat = :val')
            ->setParameter('val', $candidat)
            ->orderBy('v.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function searchVideoCV()
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.type = :cv')
            ->setParameter('cv', "CV")
            ->getQuery()
            ->getResult();
    }

    public function searchVideoEntretient()
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.type = :entretient')
            ->setParameter('entretient', "Entretient")
            ->getQuery()
            ->getResult();
    }

    public function searchVideoCVCandidat($candidat_id)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.candidat = :val')
            ->andWhere('v.type = :cv')
            ->setParameter('val', $candidat_id)
            ->setParameter('cv', "CV")
            ->getQuery()
            ->getResult();
    }

    public function searchVideoEntretientCandidat($candidat_id)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.candidat = :val')
            ->andWhere('v.type = :entretient')
            ->setParameter('val', $candidat_id)
            ->setParameter('entretient', "Entretient")
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
    //  * @return Video[] Returns an array of Video objects
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
    public function findOneBySomeField($value): ?Video
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
