<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_list")
     */
    public function index()
    {
        return $this->json([
            [
                'id' => uniqid(),
                'username' => 'Shine-neko'
            ]
        ]);
    }
}
