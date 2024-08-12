<?php

namespace App\Controller;

use App\model\Starship;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarShipApiController extends AbstractController
{
    #[Route('/api/starships', name: 'starships')]
    public function getJsonValue(LoggerInterface $logger): Response
    {

        //dd($logger); // dd stands for dump and die
        $starships = [new Starship(1, 'USS', 'Garden', 'kkk', 'qqq'),
            new Starship(2, 'OOO', 'Garden', 'kkk', 'qqq'),
            new Starship(3, 'QQQ', 'Garden', 'kkk', 'qqq')];

        $logger->info('log recorded');
        return $this->json($starships);
    }
}