<?php

namespace Core\CalendarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreCalendarBundle:Default:index.html.twig');
    }
}
