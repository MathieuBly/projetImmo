<?php

namespace App\Repository;

use App\Entity\AnnuelSales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AnnuelSales>
 *
 * @method AnnuelSales|null find($id, $lockMode = null, $lockVersion = null)
 * @method AnnuelSales|null findOneBy(array $criteria, array $orderBy = null)
 * @method AnnuelSales[]    findAll()
 * @method AnnuelSales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnnuelSalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AnnuelSales::class);
    }

//    /**
//     * @return AnnuelSales[] Returns an array of AnnuelSales objects
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

//    public function findOneBySomeField($value): ?AnnuelSales
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
