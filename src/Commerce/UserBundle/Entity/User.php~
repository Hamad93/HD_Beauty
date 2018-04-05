<?php

namespace Commerce\UserBundle\Entity;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $googleId;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $google_access_token;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $facebookId;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $facebook_access_token;

    /**
     * @ORM\Column(type="text",nullable=true)
     */
    protected $picture;

    /**
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    protected $mail_reseau;




    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @return mixed
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @param mixed $googleId
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
    }

    /**
     * @return mixed
     */
    public function getGoogleAccessToken()
    {
        return $this->google_access_token;
    }

    /**
     * @param mixed $google_access_token
     */
    public function setGoogleAccessToken($google_access_token)
    {
        $this->google_access_token = $google_access_token;
    }

    /**
     * @return mixed
     */
    public function getFacebookId()
    {
        return $this->facebookId;
    }

    /**
     * @param mixed $facebookId
     */
    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
    }

    /**
     * @return mixed
     */
    public function getFacebookAccessToken()
    {
        return $this->facebook_access_token;
    }

    /**
     * @param mixed $facebook_access_token
     */
    public function setFacebookAccessToken($facebook_access_token)
    {
        $this->facebook_access_token = $facebook_access_token;
    }

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    /**
     * @return mixed
     */
    public function getMailReseau()
    {
        return $this->mail_reseau;
    }

    /**
     * @param mixed $mail_reseau
     */
    public function setMailReseau($mail_reseau)
    {
        $this->mail_reseau = $mail_reseau;
    }
    
}
