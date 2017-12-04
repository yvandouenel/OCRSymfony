<?php

namespace Coopernet\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoopernetTestBundle:Default:index.html.twig');
    }
}
