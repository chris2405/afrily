<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {

        return $this->render('layout/home.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {

        return $this->render(':layout:test.html.twig');
    }

    /**
     * @Route("/video", name="video")
     */
    public function video()
    {

        return $this->render(':layout:video.html.twig');
    }
}
