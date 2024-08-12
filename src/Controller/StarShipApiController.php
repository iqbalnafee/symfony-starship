<?php

namespace App\Controller;

use App\model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'starships')]
    public function getJsonValue(): Response
    {

        $starships = [new Starship(1, 'USS', 'Garden', 'kkk', 'qqq'),
            new Starship(2, 'OOO', 'Garden', 'kkk', 'qqq'),
            new Starship(3, 'QQQ', 'Garden', 'kkk', 'qqq')];


        return $this->json($starships);
    }
}