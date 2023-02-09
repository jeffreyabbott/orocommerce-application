<?php

namespace EDI\Bundle\DonationApplicationBundle\Repository;
use Doctrine\ORM\QueryBuilder;
use EDI\Bundle\DonationApplicationBundle\Entity\EmbPicture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EmbPicture|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmbPicture|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmbPicture[]    findAll()
 * @method EmbPicture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class EmbPicturesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmbPicture::class);
    }

    /**
     * @return EmbPicture[]
     */
    public function findAllForApplicationId(int $applicationId)
    {
        return $this->getOrCreateQueryBuilder()
            ->andWhere('p.applicationId = :applicationId')
            ->setParameter('applicationId', $applicationId)
            ->orderBy('p.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    private function getOrCreateQueryBuilder(QueryBuilder $qb = null)
    {
        return $qb ?: $this->createQueryBuilder('p');
    }
}
