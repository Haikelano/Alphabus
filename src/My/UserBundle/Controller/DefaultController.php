<?php

namespace My\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use My\AlphabusBundle\Entity\Chassis;
class DefaultController extends Controller
{
    /**
     * @Route("/",name="homepage")
     */
    public function indexAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){

             //$redirection = new RedirectResponse($this->router->generate('admin'));
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_USER')){


            $em = $this->getDoctrine()->getManager();
            $chassis = $em->getRepository('MyAlphabusBundle:Chassis')->findAll();

            $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('MyAlphabusBundle:Chassis');

            $listeArticles = $repository->findBy(array('typechassis'=>'RR8'),
                array('datereception' => 'desc'),
                3,
                0);
            $rr2 = $repository->findBy(array('typechassis'=>'RR2'),
                array('datereception' => 'desc'),
                3,
                0);
            $rra = $repository->findBy(array('typechassis'=>'RRA'),
                array('datereception' => 'desc'),
                3,
                0);

            return $this->render('MyAlphabusBundle:Default:index.html.twig',

                array('enss' => $listeArticles,
                     'rr2'=>$rr2,
                    'rra' =>$rra

                )
                );


        }

    }



    /**
     * return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/admi/", name="admin_page")
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
