<?php

namespace My\AlphabusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        //return new Response("Hello World !");
        return $this->render('MyAlphabusBundle:Default:index.html.twig');
    }
}
