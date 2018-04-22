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
        return $this->render('CommerceSiteBundle::accessoires.html.twig');
    }

    public function maquillagesAction()
    {
        return $this->render('CommerceSiteBundle::maquillages.html.twig');
    }

    public function marquesAction()
    {
        return $this->render('CommerceSiteBundle::marques.html.twig');
    }

    public function tutosAction()
    {
        return $this->render('CommerceSiteBundle::tutos.html.twig');
    }

    public function panierAction()
    {
        return $this->render('CommerceSiteBundle::panier.html.twig');
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
        return $this->render('CommerceSiteBundle::apropos.html.twig');
    }
}
