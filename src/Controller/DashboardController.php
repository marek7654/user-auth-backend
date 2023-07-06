<?php

  
namespace App\Controller;
  
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
  
/**
 * @Route("/api", name="api_")
 */
  
class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Witaj! Tajna wiadomość z serwera to „Żyrafy wchodzą do szafy”.',
            'correct' => true,
        ]);
    }
}
