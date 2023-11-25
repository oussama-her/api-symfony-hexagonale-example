<?php

namespace App\UI\Http\Controller;

use App\Application\Service\UserApplicationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $userApplicationService;

    public function __construct(UserApplicationService $userApplicationService)
    {
        $this->userApplicationService = $userApplicationService;
    }

    /**
     * @Route("/user/{id}", methods={"GET"})
     */
    public function getUser(int $id): JsonResponse
    {
        $user = $this->userApplicationService->getUser($id);

        return new JsonResponse($user);
    }
}
