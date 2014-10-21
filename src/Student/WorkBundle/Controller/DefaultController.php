<?php

namespace Student\WorkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('StudentWorkBundle:Default:index.html.twig', array('name' => $name));
    }
}
