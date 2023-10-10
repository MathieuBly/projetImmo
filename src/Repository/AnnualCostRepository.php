<?php

namespace App\Repository;

use App\Entity\AnnualCost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnnualCost>
 *
 * @method AnnualCost|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnnualCost|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnnualCost[]    findAll()
 * @method AnnualCost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnualCostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnnualCost::class);
    }

//    /**
//     * @return AnnualCost[] Returns an array of AnnualCost objects
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

//    public function findOneBySomeField($value): ?AnnualCost
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
