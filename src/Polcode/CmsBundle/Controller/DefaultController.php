<?php

namespace Polcode\CmsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PolcodeCmsBundle:Default:index.html.twig');
    }
}
