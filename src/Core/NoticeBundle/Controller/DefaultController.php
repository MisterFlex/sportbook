<?php

namespace Core\NoticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreNoticeBundle:Default:index.html.twig');
    }
}
