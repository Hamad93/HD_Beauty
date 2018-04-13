<?php

namespace Commerce\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CommerceSiteBundle::index.html.twig');
    }
    public function accessoiresAction()
    {
        return $this->render('CommerceSiteBundle::product.html.twig');
    }

    public function panierAction()
    {
        return $this->render('CommerceSiteBundle::cart.html.twig');
    }

    public function blogAction()
    {
        return $this->render('CommerceSiteBundle::blog.html.twig');
    }
    public function contacternousAction()
    {
        return $this->render('CommerceSiteBundle::contact.html.twig');
    }
    public function aproposAction()
    {
        return $this->render('CommerceSiteBundle::about.html.twig');
    }
}
