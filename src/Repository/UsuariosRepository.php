<?php

namespace App\Repository;

use App\Entity\Usuarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Usuarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usuarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usuarios[]    findAll()
 * @method Usuarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Usuarios::class);
        $this->manager = $manager;
    }

    // /**
    //  * @return Usuarios[] Returns an array of Usuarios objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usuarios
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function grabar($nombre, $email, $password)
    {
        $newDatos = new Datos();
        $newDatos  
            ->setNombre($name)
            ->setEmail($email)
            ->setPassword($password);
        $this->manager->persist($newDatos);
        $this->manager->flush();
    }
    
    public function buscarDatosUsuario($id)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery('SELECT usuarios.id, usuarios.nombre, usuarios.email usuarios.password FROM App:Usuarios usuarios WHERE usuarios.id = :id')->setParameter('id',$id);
        
        return $query;
    }
}
