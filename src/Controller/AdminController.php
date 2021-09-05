<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/home")
     */
    public function admin()
    {
        return $this->render("base.html.twig");
    }

    /**
     * @Route("/admin/users")
     */
    public function users()
    {
        return $this->render("base.html.twig");
    }
}
