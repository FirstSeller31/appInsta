<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfluencerController extends AbstractController
{
    /**
     * @Route("/influencer", name="influencer")
     */
    public function index()
    {
        return $this->render('influencer/index.html.twig', [
            'controller_name' => 'InfluencerController',
        ]);
    }
}
