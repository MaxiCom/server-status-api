<?php

namespace App\Repository;

use App\Entity\ActiveUserCount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ActiveUserCount>
 *
 * @method ActiveUserCount|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActiveUserCount|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActiveUserCount[]    findAll()
 * @method ActiveUserCount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiveUserCountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActiveUserCount::class);
    }

//    /**
//     * @return ActiveUserCount[] Returns an array of ActiveUserCount objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ActiveUserCount
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
