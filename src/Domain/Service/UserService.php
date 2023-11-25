<?php

namespace App\Domain\Service;

use App\Domain\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUser(int $id)
    {
        return $this->userRepository->find($id);
    }
}
