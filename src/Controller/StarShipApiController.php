<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'starships')]
    public function getJsonValue(): Response
    {
        $starships = [[
            'name' => 'USS',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'taken over by q'
        ], [
            'name' => 'ZZZ',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'taken over by q'
        ], [
            'name' => 'PPP',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'taken over by q'
        ]];

        return $this -> json($starships);
    }
}