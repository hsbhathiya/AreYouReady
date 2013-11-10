<?php

namespace AreYouReady\CompanyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AreYouReadyCompanyBundle:Default:index.html.twig', array('name' => $name));
    }
}
