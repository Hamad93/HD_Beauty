<?php

namespace Commerce\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommerceSiteBundle::index.html.twig');
    }
}
