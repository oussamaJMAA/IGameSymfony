<?php

namespace App\Repository;

use App\Entity\Trash;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Trash|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trash|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trash[]    findAll()
 * @method Trash[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrashRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trash::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Trash $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Trash $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function countDeletedMessages(){

        $em=$this->getEntityManager();
        $query=$em->createQuery('SELECT count(a) FROM App\Entity\Trash a');
        return $query->getSingleScalarResult();
    
    }
    public function display($userame)
    {
        return $this->createQueryBuilder('u')
            ->where('u.senderId = :username')
            ->orWhere('u.recipientId = :username')
            ->setParameter('username', $userame)
            ->getQuery()
            ->getResult();
    }
    

    // /**
    //  * @return Trash[] Returns an array of Trash objects
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
    public function findOneBySomeField($value): ?Trash
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
