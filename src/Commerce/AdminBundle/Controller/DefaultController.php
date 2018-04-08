<?php

namespace Commerce\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        $this->get('envoi.mail')->sendtest('diallohamad@gmail.com');
        return $this->render('@CommerceAdmin/layout.html.twig');

    }
}
