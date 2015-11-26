<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('app_dashboard_index'));
    }

    public function dashboardAction()
    {
        return $this->render('AppBundle:Dashboard:index.html.twig', array());    
    }

    public function accessdeniedAction()
    {
        return $this->render('AppBundle:Dashboard:accessdenied.html.twig', array());    
    }

}
