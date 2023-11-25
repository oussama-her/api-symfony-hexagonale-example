<?php

namespace App\Domain\Repository;

interface UserRepositoryInterface
{
    public function find(int $id);
}
