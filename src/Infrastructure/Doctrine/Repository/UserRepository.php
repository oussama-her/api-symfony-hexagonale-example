<?php

namespace App\Infrastructure\Doctrine\Repository;

use App\Domain\Repository\UserRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class UserRepository implements UserRepositoryInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function find(int $id)
    {
        return $this->entityManager->getRepository(User::class)->find($id);
    }
}
