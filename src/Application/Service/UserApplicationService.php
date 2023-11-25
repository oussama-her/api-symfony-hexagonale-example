<?php

namespace App\Application\Service;

use App\Domain\Service\UserServiceInterface;

class UserApplicationService
{
    private $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function getUser(int $id)
    {
        return $this->userService->getUser($id);
    }
}
