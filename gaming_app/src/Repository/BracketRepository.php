<?php

namespace App\Repository;

use App\Entity\Bracket;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bracket|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bracket|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bracket[]    findAll()
 * @method Bracket[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BracketRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bracket::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Bracket $entity, bool $flush = true): void
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
    public function remove(Bracket $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function names_from_bracket($equipe1,$equipe2){

        $conn = $this->getEntityManager()
        ->getConnection();
        $sql = "select equipe1,equipe2 from bracket where equipe1=? and equipe2=?";
        $statement = $conn->prepare($sql);
        $statement->bindValue(1, $equipe1);
        $statement->bindValue(2, $equipe2);
        $resultSet = $statement->executeQuery();
        $a= $resultSet->fetchAllAssociative();
    return $a;
       }

    public function remplir($equipe1,$equipe2){
        $conn = $this->getEntityManager()
        ->getConnection();
        $sql = "insert into bracket(equipe1,equipe2) values(?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $equipe1);
        $stmt->bindValue(2,$equipe2);

    return $stmt->executeQuery();
      
    }
    public function getBracket($value1)
    {
        $em = $this->getEntityManager();
        $query = $em->createQuery('SELECT b FROM App\Entity\Bracket b  where b.equipe1 LIKE :v or b.equipe2 LIKE :v')
        ->setParameter('v',$value1);
    $e = $query->getSingleResult();
    return $e ;
    }

  
    public function Final(){

        $conn = $this->getEntityManager()
        ->getConnection();
        $sql = "select status_team1 from bracket where status_team1 like 'Final%'"; 
        $statement = $conn->prepare($sql);

        $resultSet = $statement->executeQuery();
        $a= $resultSet->fetchAllAssociative();
    return $a;
       }

   

    // /**
    //  * @return Bracket[] Returns an array of Bracket objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bracket
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
