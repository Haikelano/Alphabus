<?php

namespace My\AlphabusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/index_user")
     */
    public function indexAction()
    { $userManager = $this->get('fos_user.user_manager');
    $user=$this->getUser();

        $users = $userManager->findUsers();
        return $this->render('MyAlphabusBundle:User:index.html.twig', array(
            'users' => $users,
            'user' => $user,
            'data' => new \DateTime("now")

        ));

    }

    /**
     * @Route("/rech")
     */
    public function rechAction()
    {
        return $this->render('MyAlphabusBundle:User:rech.html.twig', array(
            // ...
        ));
    }

}
