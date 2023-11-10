<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger', name: 'app_burger')]
    public function listBurgers(): Response
    {
        $burgers = [
            [
                'name' => 'Le classique',
                'price' => 8.99,
                'description' => 'Un bon burger avec du boeuf, du cheddar et de la salade',
            ],
            [
                'name' => 'Le végétarien',
                'price' => 7.99,
                'description' => 'Un burger avec du tofu, du cheddar et de la salade',
            ],
            [
                'name' => 'Le bacon',
                'price' => 9.99,
                'description' => 'Un burger avec du boeuf, du bacon, du cheddar et de la salade',
            ]
        ];
        return $this->render('burger/index.html.twig', [
            'burgers' => $burgers,
        ]);
    }
}
