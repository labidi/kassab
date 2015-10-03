<?php

namespace App\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	echo "sss" ;
        return $this->render('AppUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
