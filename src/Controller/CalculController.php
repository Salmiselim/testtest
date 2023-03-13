<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/some/{a}/{b}', name: 'calcul_add')]
    public function add($a, $b)
    { {
            $c = $a + $b;
            return $this->render('calcul/some.html.twig', ['a' => $a, 'b' => $b, 'c' => $c]);
        }
    }
    #[Route('/calcul/sub/{x}/{y}', name: 'calcul_sub')]
    public function sub($x, $y)
    { {
            $z = $x - $y;
            return $this->render('calcul/sub.html.twig', ['x' => $x, 'y' => $y, 'z' => $z]);
        }
    }
    #[Route('/home', name: 'app_home')]
    public function home()
    { {

            return $this->render('calcul/home.html.twig');
        }
    }
}
