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

    public function count_participation(){
        $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select count(id) from participation";
    $statement = $conn->prepare($sql);

    $resultSet = $statement->executeQuery();
    $a = $resultSet->fetchOne();
return $a;
    }

public function count_equipes(){

    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select count(id) from equipe";
    $statement = $conn->prepare($sql);

    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;
}

public function count_tournois(){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select count(id) from tournois";
    $statement = $conn->prepare($sql);

    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;
}

public function timeTournois(){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select time_t from tournois";
    $statement = $conn->prepare($sql);
  
    $resultSet = $statement->executeQuery();
    $time = $resultSet->fetch();
return $time;

}

public function count_participants_tournois($idT){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select count(id) from participation where id_tournois=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $idT);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;

}
public function nom_tournois($idT){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select nom_tournois from tournois where id=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $idT);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;

}
public function nom_user($idT){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select username from user where equipe=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $idT);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;

}
public function verif_bracket(){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select status_Team1 from bracket where status_Team1 like 'Final%'";
    $statement = $conn->prepare($sql);

    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;

}
public function verif_equipe_user($id){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select equipe from user where id=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $id);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchOne();
return $a;

}

public function participation($idT,$idU){
    
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "insert into participation(id_tournois,id_equipe,tournois_nom,equipe_nom) values(?,(select equipe from user where id=?),(select nom_tournois from tournois where id=?),(select nom_equipe from equipe where id=(select equipe from user where id=?)))";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $idT);
    $stmt->bindValue(2,$idU);
    $stmt->bindValue(3, $idT);
    $stmt->bindValue(4, $idU);
return $stmt->executeQuery();
  
}


public function participants($idT){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select u.email from user u inner join equipe e on u.equipe=e.id inner join participation te on te.id_equipe=e.id where te.id_tournois=?";
    $statement = $conn->prepare($sql);
    $statement->bindValue(1, $idT);
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchAllAssociative();
return $a;
}


public function tournaments(){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select * from tournois";
    $statement = $conn->prepare($sql);
   
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchAllAssociative();
return $a;
}



public function idT(){
    $conn = $this->getEntityManager()
    ->getConnection();
    $sql = "select id from tournois";
    $statement = $conn->prepare($sql);
   
    $resultSet = $statement->executeQuery();
    $a= $resultSet->fetchAllAssociative();
return $a;
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


    public function count1() {
        
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 1;";
                  
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
 
}

public function count2() {
 
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="  SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 2;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
   
}
public function count3() {
  
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois)  =3;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
    }
public function count4() {
  
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 4;  ";
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
}
public function count5() {
    
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois)  = 5;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
}
public function count6() {
 
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql=" SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 6;  ";
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
   
   
}
public function count7() {

        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 7;  ";
       
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
}
public function count8() {

        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 8;  ";
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
 
   
}
public function count9() {

        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois)  = 9;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
 
   
}
public function count10() {
 
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois)  = 10;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
}
public function count11() {
   
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois)  = 11;  ";
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
}
public function count12() {
   
        $conn=$this->getEntityManager()
                   ->getConnection();
                   $sql="SELECT count(extract(month from date_tournois)) as 'count' from tournois where extract(month from date_tournois) = 12;  ";
        
                   $stmt = $conn->query($sql);
                   $results = $stmt->fetchOne();
                   return $results;
   
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
