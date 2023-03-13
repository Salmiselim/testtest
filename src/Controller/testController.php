<?php

namespace App\Controller;

use App\taxes\Calculateur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class testController extends AbstractController
{
    #[Route('/test', name: 'test')]
    function index()
    {
        dump("bonjour");
        die;
    }

    function test3()
    {
        return $this->render("test/test3.html.twig");
    }



    #[Route('/test2', name: 'test2')]
    function test2()
    {
        var_dump("Hello");
        die();
    }
}
