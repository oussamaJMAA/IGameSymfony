<?php

namespace App\Repository;
use Symfony\Component\Security\Core\Security;
use App\Entity\User;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\Persistence\ManagerRegistry;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{private $security;
    public function __construct(ManagerRegistry $registry,Security $security)
    {
        parent::__construct($registry, User::class);
        $this->security = $security;
    }
    public function role($email ,$role) {
        // Entity manager
        $em= $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
            
        $qb->select('u')
                ->from('App\Entity\User:User', 'u') // Change this to the name of your bundle and the name of your mapped user Entity
                ->where('u.email = :user') 
                ->andWhere('u.roles LIKE :roles')
                ->setParameter('user', $email)
                ->setParameter('roles', '%"' . $role . '"%');
            
        $user = $qb->getQuery()->getResult();
            
        if(count($user) >= 1){
           return true;
        }else{
           return false;
        }
    }
    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(User $entity, bool $flush = true): void
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
    public function remove(User $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function getuserbyemail($id): array
    {
        $entityManager = $this->getEntityManager();

      $query = $entityManager->createQuery(
            'SELECT p.id , p.email , p.roles
            FROM App\Entity\User p
            Where p.email = :id or p.username =:id'

        )
                    ->setParameter('id', $id);

        // returns an array of User objects
        return $query->getResult();
    }

    
    public function findOrCreateGoogleUser(ResourceOwnerInterface $owner): User
{
   $user = $this->createQueryBuilder('u')
        ->where ('u.email = :email')
       ->setParameters([
           'email' => $owner->getEmail()
       ])
       ->getQuery ()
       ->getOneOrNullResult();
    if ($user) {
       return $user;

    }
    $user= (new User()) 
   ->setEmail($owner->getEmail())
   ->setUsername($owner->getFirstName() . " " .$owner->getLastName())
   ->setFirstname($owner->getFirstName())
   ->setLastname($owner->getLastName())
   ->setImage($owner->getAvatar())
   ->setIsSocial(true)
   ->setRoles(['ROLE_USER']);
$em =$this->getEntityManager();
$em->persist($user);
$em->flush();
return $user;


}public function findOrCreateDiscordUser(ResourceOwnerInterface $owner): User{
    $user = $this->createQueryBuilder('u')
        ->where ('u.email = :email')
       ->setParameters([
           'email' => $owner->getEmail()
       ])
       ->getQuery ()
       ->getOneOrNullResult();
    if ($user) {
       return $user;

    }
    $user= (new User()) 
   ->setEmail($owner->getEmail())
   ->setUsername($owner->getUsername())
   ->setIsSocial(true)
   ->setImage("https://cdn.discordapp.com/avatars/" . $owner->getId() . "/" . $owner->getAvatarHash() . ".png")
   ->setRoles(['ROLE_USER']);
$em =$this->getEntityManager();
$em->persist($user);
$em->flush();
return $user;
}


public function findOrCreateFacebookUser(ResourceOwnerInterface $owner): User{
    $user = $this->createQueryBuilder('u')
    ->where ('u.email = :email')
   ->setParameters([
       'email' => $owner->getEmail()
   ])
   ->getQuery ()
   ->getOneOrNullResult();
if ($user) {
   return $user;

}
$user= (new User()) 
->setEmail($owner->getEmail())
->setIsSocial(true)
->setUsername($owner->getName())
->setImage($owner->getPictureUrl())
->setRoles(['ROLE_USER']);
$em =$this->getEntityManager();
$em->persist($user);
$em->flush();
return $user;
}


public function countUser(){

    $em=$this->getEntityManager();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u');
    return $query->getSingleScalarResult();

}
public function AllEmailsExceptCurrentUser(){
    $qb = $this->createQueryBuilder('m');
    $qb->where('m.email NOT LIKE :email')
    ->andWhere('m.roles LIKE :admin')
    ->setParameter('email',$this->security->getUser()->getEmail())
    ->setParameter('admin', '%"'.'ROLE_ADMIN'.'"%');
    return $qb;
}
public function adminEmails(){
    $em = $this->getEntityManager();
    $query = $em->createQuery('SELECT u FROM App\Entity\User u  where u.roles LIKE :role')
    ->setParameter('role', '%"'.'ROLE_ADMIN'.'"%');
$e = $query->getResult(); 
return $e ;// array of CmsUser ids
}
public function numberOfAdmins(){
    $em = $this->getEntityManager();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u where u.roles LIKE :role')
    ->setParameter('role', '%"'.'ROLE_ADMIN'.'"%');
    return $query->getSingleScalarResult();
}
public function numberOfClients(){
    $em = $this->getEntityManager ();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u where u.roles LIKE :role')
    ->setParameter('role', '%"'.'ROLE_USER'.'"%');
    return $query->getSingleScalarResult(); 

}
public function numberOfEditors(){
    $em = $this->getEntityManager ();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u where u.roles LIKE :role')
    ->setParameter('role', '%"'.'ROLE_EDITOR'.'"%');
    return $query->getSingleScalarResult(); 

}
public function numberOfMen(){
    $em = $this->getEntityManager ();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u where u.gender LIKE :gender')
    ->setParameter('gender','male');
    return $query->getSingleScalarResult(); 

}
public function numberOfWomen(){
    $em = $this->getEntityManager ();
    $query=$em->createQuery('SELECT count(u) FROM App\Entity\User u where u.gender LIKE :gender')
    ->setParameter('gender','female');
    return $query->getSingleScalarResult(); 

}


    
    public function findByE($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('u.id', 'ASC')
            //->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function count1() {
        
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 1;";
                      
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
     
    }

    public function count2() {
     
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="   SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 2;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
       
    }
    public function count3() {
      
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) =3;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
        }
    public function count4() {
      
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql=" SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 4;  ";
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
    }
    public function count5() {
        
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 5;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
    }
    public function count6() {
     
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql=" SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 6;  ";
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
       
       
    }
    public function count7() {
   
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 7;  ";
           
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
    }
    public function count8() {
  
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 8;  ";
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
     
       
    }
    public function count9() {
    
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 9;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
     
       
    }
    public function count10() {
     
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="   SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 10;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
    }
    public function count11() {
       
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="   SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 11;  ";
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
    }
    public function count12() {
       
            $conn=$this->getEntityManager()
                       ->getConnection();
                       $sql="SELECT count(extract(month from last_login)) as 'count' from user where extract(month from last_login) = 12;  ";
            
                       $stmt = $conn->query($sql);
                       $results = $stmt->fetchOne();
                       return $results;
       
    }
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->Where('b.username like :val or b.email like :val or b.roles like :val or b.gender like :val or b.phone like :val or b.createdAt like :val')
            ->setParameter('val', '%'.$value.'%')
            ->orderBy('b.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByEmailOrUsername(string $emailOrUsername)
{
    return $this->createQueryBuilder('u')
        ->where('u.email = :emailOrUsername')
        ->orWhere('u.username = :emailOrUsername')
        ->setParameter('emailOrUsername', $emailOrUsername)
        ->getQuery()
        ->getOneOrNullResult();
}














}
