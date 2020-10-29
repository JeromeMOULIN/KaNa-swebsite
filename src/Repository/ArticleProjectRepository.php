<?php

namespace App\Repository;

use App\Entity\ArticleProject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleProject|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleProject|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleProject[]    findAll()
 * @method ArticleProject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleProjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleProject::class);
    }

    // /**
    //  * @return ArticleProject[] Returns an array of ArticleProject objects
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
    public function findOneBySomeField($value): ?ArticleProject
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
