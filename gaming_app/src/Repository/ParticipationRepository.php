<?php

namespace App\Repository;

use App\Entity\Participation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Participation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participation[]    findAll()
 * @method Participation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Participation $entity, bool $flush = true): void
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
    public function remove(Participation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function test($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.idTournois= :val')
            ->setParameter('val', $value)
          
            ->getQuery()
            ->getResult()
        ;
    }
   public function names_participations($idT){

    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select equipe_nom from participation where id_tournois=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $idT);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchAllAssociative();
return $a;
   }

   public function idT(){

    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select id_tournois from participation";
    $statement = $conn->prepare($sql);
 
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchAllAssociative();
return $a;
   }

    /*
    public function findOneBySomeField($value): ?Participation
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
