<?php


namespace App\Repository;

use App\Entity\game;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

//
use Symfony\Component\HttpFoundation\Request;

/**
 * @method game|null find($id, $lockMode = null, $lockVersion = null)
 * @method game|null findOneBy(array $criteria, array $orderBy = null)
 * @method game[]    findAll()
 * @method game[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class gameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, game::class);
    }

    // /**
    //  * @return game[] Returns an array of game objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?game
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}