<?php

namespace Commerce\AdminBundle\Services;


use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Templating\EngineInterface;
class Mailer

{
    protected $templating;
    protected $mailer;
    private  $form = "diallo@hammady.info";
    private $container;

    protected function sendMessage($to, $subject, $body)
    {
        $mail = \Swift_Message::newInstance();

        $mail
            ->setFrom($this->form)
            ->setBcc($to)
            ->setSubject($subject)
            ->setBody($body)
            ->setContentType('text/html');
        $this->mailer->send($mail);
    }

    public function __construct(\Swift_Mailer $mailer,EngineInterface  $templating, ContainerInterface $container)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
        $this->container = $container;

    }


    public function sendtest($mail_med)
    {
        // reception du mail pour lactivation du compte de medecin et du clien
        $template = '@CommerceAdmin/Default/layout.html.twig';

        $date = new \Datetime();
        $date=$date->format('d-m-Y H:i');
        $to = $mail_med ;
        $subject = "Mise à jour profil Dr";

        $body = $this->templating->render($template);

        $this->sendMessage($to, $subject, $body);
    }

}