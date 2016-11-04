<?php

namespace Polcode\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PolcodeUserBundle:Default:index.html.twig');
    }
}
