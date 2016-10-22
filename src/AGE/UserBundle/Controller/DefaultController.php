<?php

namespace AGE\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AGEUserBundle:Default:index.html.twig', array('name'=>"GustavoE"));
    }
}
