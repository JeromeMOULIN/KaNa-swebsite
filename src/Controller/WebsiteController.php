<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    /**
     * @Route("/website", name="website")
     */
    public function index(): Response
    {
        return $this->render('website/index.html.twig', [
            'controller_name' => 'WebsiteController',
        ]);
    }  


    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('website/home.html.twig');
    }

    /**
     * @Route("/curriculum", name="cv")
     */
    public function curriculum(){
        return $this->render('website/curriculum.html.twig');
    }

    /**
     * @Route("/collection", name="collection")
     */
    public function collection(){
        return $this->render('website/collection.html.twig');
    }

    /**
     * @Route("/project", name="project")
     */
    public function project(){
        return $this->render('website/project.html.twig');
    }

    /**
     * @Route("/rando", name="randomizer")
     */
    public function rando(){
        return $this->render('website/rando.html.twig');
    }
}
