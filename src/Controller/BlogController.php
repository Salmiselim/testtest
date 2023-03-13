<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'blog_list')]
    public function list(): Response
    { {
            return new Response('<h1>Liste des articles</h1>');
        }
    }
    #[Route('/blog/show/{id}', name: 'blog_list', requirements: ['id' => '\d+'])]
    public function show($id)
    { {
            $name = "introduction au symfony";
            return $this->render('Blog/show.html.twig', ['a' => $id, 'b' => $name]);
        }
    }
}
