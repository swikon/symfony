<?php

namespace kayes\Bundle\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('kayesTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
