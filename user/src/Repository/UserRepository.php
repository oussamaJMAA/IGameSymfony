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
    