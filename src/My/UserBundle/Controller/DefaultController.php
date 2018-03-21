<?php

namespace My\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){

            return $this->render('MyAlphabusBundle:Default:admin.html.twig');
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){

            return $this->render('MyAlphabusBundle:Default:index.html.twig');
        }

    }



    /**
     * return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/admin/", name="admin_page")
     */
    public function adminPageAction()
    {
        return $this->render('MyAlphabusBundle:Default:admin.html.twig');
    }

    /**
     * return \Symfony\Component\HttpFoundation\Response
     * @Route("/", name="user_check")
     *
     *methode pour user check je utiliser a la page d'index
     *
     */

    public function showUserAction(){

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){

            return $this->render('MyAlphabusBundle:Default:admin.html.twig');
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){

            return $this->render('MyAlphabusBundle:Default:index.html.twig');
        }



    }
}
