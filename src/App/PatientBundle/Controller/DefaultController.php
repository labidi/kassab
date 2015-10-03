<?php

namespace App\PatientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AppPatientBundle:Default:index.html.twig', array('name' => $name));
    }
}
