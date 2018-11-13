<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes", name="recipe")
     */
    public function index()
    {
        return $this->json([
            [
                'id' => uniqid(),
                'name' => 'pizza hawaienne',
                'ingredients' => [
                    '1 pâte à pizza.',
                    'Sauce tomate',
                    '4 tranches de jambon blanc',
                    '2 saucisses de porc',
                    '200 g d\'ananas frais ou en boîte',
                    '1 boule de mozzarella',
                    'Basilic ciselé',
                    'Origan en poudre'
                ]
            ],
            [
                'id' => uniqid(),
                'name' => 'Vokda vin blanc',
                'ingredients' => [
                    'vinc blanc',
                    'vokda'
                ]
            ]
        ]);
    }
}
