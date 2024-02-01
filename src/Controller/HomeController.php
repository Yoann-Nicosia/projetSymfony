<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        $users = [
            ['name' => 'John Doe', 'phone' => '0706060606'],
            ['name' => 'Fred Doe', 'phone' => '0806060606'],
            ['name' => 'Aypierre Doe', 'phone' => '0906060606']
        ];
        return $this->render('home/index.html.twig', compact("users"));
        
    }
    
    #[Route('/create', name: '_create')]
    public function create(): Response
    {
        return $this->render('home/create.html.twig');
        
    }
    
    
}
