<?php

namespace My\AlphabusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use My\AlphabusBundle\Entity\Chassis;
use My\AlphabusBundle\Form\ChassisType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ChassisController extends Controller
{
    /**
     * @Route("/addchassis")
     */
    public function addchassisAction(Request $request)
    {
        $message="";
        $chassis= new chassis();
        $f=$this->container->get('form.factory')->create(new ChassisType(),
            $chassis);
        $f ->handleRequest($request);
        if ($f->isValid())
        {
            $message="Ajout effectué avec succes";
            $em = $this->getDoctrine()->getManager();
            $em->persist($chassis);
            $em->flush();


        }
        return $this->render('MyAlphabusBundle:Chassis:addchassis.html.twig', array(
            "f"=>$f->createView(),
            "message"=>$message,
        ));
    }

    /**
     * @Route("/editchassis")
     */
    public function editchassisAction()
    {
        return $this->render('MyAlphabusBundle:Chassis:editchassis.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/listchassis", name="list_chassis")
     */
    public function listchassisAction()
    {
        return $this->render('MyAlphabusBundle:Chassis:listchassis.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delchassis")
     */
    public function delchassisAction()
    {
        return $this->render('MyAlphabusBundle:Chassis:delchassis.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/cherchassis")
     */
    public function cherchassisAction()
    {
        return $this->render('MyAlphabusBundle:Chassis:cherchassis.html.twig', array(
            // ...
        ));
    }

}
