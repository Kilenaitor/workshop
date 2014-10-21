<?php

namespace Student\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkController extends Controller
{
    public function indexAction()
    {
        return $this->render('StudentWorkBundle:Work:index.html.twig');
    }
}
