<?php

namespace Core\SportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreSportBundle:Default:index.html.twig');
    }
}
