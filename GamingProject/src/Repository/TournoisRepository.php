<?php

namespace App\Repository;

use App\Entity\Tournois;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Tournois|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tournois|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tournois[]    findAll()
 * @method Tournois[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TournoisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournois::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Tournois $entity, bool $flush = true): void
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
    public function remove(Tournois $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

public function Affiche_Participation(){
    $rsm = new ResultSetMapping();
    $query = $this->getEntityManager()->createNativeQuery('select * from participation',$rsm);
 return $query->getResult();
  }

  public function findTournoisByNomTournois($n){
    return $this->createQueryBuilder('t')
    ->where('t.nomTournois LIKE :nomTournois')
    ->setParameter('nomTournois', '%'.$n.'%')
    ->getQuery()
    ->getResult();
    }
    
public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->Where('b.nomTournois like :val or b.recompense like :val or b.dateTournois like :val or b.ptsXp like :val or b.timeT like :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('b.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }






















    // /**
    //  * @return Tournois[] Returns an array of Tournois objects
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
    public function findOneBySomeField($value): ?Tournois
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
