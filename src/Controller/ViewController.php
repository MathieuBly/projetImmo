<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $data1 = [
            [
                'title' => 'Sales',
                'icon' => 'dollar-sign',
                'value' => '2.382',
                'change_class' => 'text-danger',
                'change' => '-3.65%',
                'change_label' => 'Since last week',
            ],
            [
                'title' => 'Visitors',
                'icon' => 'users',
                'value' => '14.212',
                'change_class' => 'text-success',
                'change' => '5.25%',
                'change_label' => 'Since last week',
            ],
        ];
    
        $data2 = [
            [
                'title' => 'Earnings',
                'icon' => 'dollar-sign',
                'value' => '$21.300',
                'change_class' => 'text-success',
                'change' => '6.65%',
                'change_label' => 'Since last week',
            ],
            [
                'title' => 'Orders',
                'icon' => 'shopping-cart',
                'value' => '64',
                'change_class' => 'text-danger',
                'change' => '-2.25%',
                'change_label' => 'Since last week',
            ],
        ];
    
        return $this->render('view/index.html.twig', [
            'data_graph1' => $data1,
            'data_graph2' => $data2,
        ]);
    }
}
