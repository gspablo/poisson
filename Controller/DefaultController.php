<?php

namespace bet\resultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('resultsBundle:Default:index.html.twig', array('name' => $name));
    }
}
