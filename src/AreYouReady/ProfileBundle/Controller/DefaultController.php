<?php

namespace AreYouReady\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AreYouReadyProfileBundle:Default:index.html.twig', array('name' => $name));
    }
}
