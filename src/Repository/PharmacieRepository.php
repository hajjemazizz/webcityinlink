<?php

namespace App\Repository;

use App\Entity\Pharmacie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Pharmacie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pharmacie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pharmacie[]    findAll()
 * @method Pharmacie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PharmacieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pharmacie::class);
    }

    /**
     * Find pharmacies by search term with pagination.
     *
     * @param string $term
     * @return Pharmacie[]
     
     */
    

    public function findByTerm(string $term)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.nom LIKE :term OR m.adresse LIKE :term')
            ->setParameter('term', '%' . $term . '%')
            ->getQuery()
            ->getResult();
    }

}
