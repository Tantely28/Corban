<?php

namespace App\Repository;

use App\Entity\Candidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Candidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidat[]    findAll()
 * @method Candidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Candidat::class);
    }

    public function authentification($pseudo,$password)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.pseudo = :pseudo')
            ->andWhere('c.password = :pass')
            ->setParameter('pseudo', $pseudo)
            ->setParameter('pass', sha1($password))
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Candidat[] Returns an array of Candidat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Candidat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
