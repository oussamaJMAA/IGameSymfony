<?php

namespace App\Repository;

use App\Entity\Comment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comment[]    findAll()
 * @method Comment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comment::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Comment $entity, bool $flush = true): void
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
    public function remove(Comment $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

     /**
     * @param $auteur
     * @return mixed
     */
    public function findByAuteur($auteur){
        return $this->createQueryBuilder('p')
            ->select('p.id,p.auteur,p.contenu')
            ->andWhere('p.contenu like :val')
            ->setParameter('val','%'.$auteur.'%')
            ->orderBy('p.id' , 'ASC')
            ->getQuery()
            ->getResult();
    }


    
    // /**
    //  * @return Comment[] Returns an array of Comment objects
    //  */

        /**
     * @param $nom
     * @return mixed
     */
    public function findByContenu($nom){
        return $this->createQueryBuilder('p')
            ->select('p.id,p.contenu,p.auteur')
            ->andWhere('p.contenu like :val')
            ->setParameter('val','%'.$nom.'%')
            ->orderBy('p.id' , 'ASC')
            ->getQuery()
            ->getResult();

    }

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
    public function findOneBySomeField($value): ?Comment
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
