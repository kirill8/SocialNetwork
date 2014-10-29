<?php

namespace Asp\SNBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AspSNBundle:Default:index.html.twig', array('name' => $name));
    }
}
