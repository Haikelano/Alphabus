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
     * @Route("/addchassis", name="new_chassis")
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
     * @Route("/editchassis/{id}",name = "edit_chassis")
     * @Route("/addchassis",name = "new_chassis")
     */

    public function editenseignantAction(Request $request, $id = null)
    {        $message='';
        $em = $this->getDoctrine()->getManager();
        if (isset($id))
        {
            // modification d'un acteur existant : on recherche ses données
            $chassis = $em->find('MyAlphabusBundle:Chassis', $id);
            if (!$chassis)
            {
                $message='Aucune chassis trouvé';
            }
        }
        else
        {
            // ajout d'un nouvel chassus
            $chassis = new Chassis();
        }
        $form = $this->container->get('form.factory')->create(new ChassisType(), $chassis);
        $form ->handleRequest($request);
        if ($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chassis);
            $em->flush();
            if (isset($id))
            {
                $message='CHassis modifié avec succès !';
            }
            else
            {
                $message='Chassis ajouté avec succès !';
            }
        }
        return $this->render('MyAlphabusBundle:Chassis:editchassis.html.twig', array(
            'f' => $form->createView(),
            'message' => $message
        ));
    }

    /**
     * @Route("/listchassis", name="list_chassis")
     */
    public function listchassisAction()
    {
        $em = $this->getDoctrine()->getManager();
        $chassis = $em->getRepository('MyAlphabusBundle:Chassis')->findAll();

        return $this->render('MyAlphabusBundle:Chassis:listchassis.html.twig',
            array('enss' => $chassis));
            // ...

    }

    /**
     * @Route("/delchassis", name="del_chassis")
     */
    public function delchassisAction()
    {
        return $this->render('MyAlphabusBundle:Chassis:delchassis.html.twig', array(
            // ...
        ));
    }


    /**
     * @Route("/cherchassis",name = "cherchassis")
     * @Method({"GET", "POST"})
     */
    public function cherchassisAction(Request $request)
    {
        $nchassis = $request->query->get('nchassis');
        $em = $this->getDoctrine()->getManager();
        $nchassis = $em->getRepository('MyAlphabusBundle:Chassis')->findBy(array("nchassis" => $nchassis));
        return $this->render('MyAlphabusBundle:Chassis:cherchassis.html.twig', array(
            'enss' => $nchassis
        ));
    }


}
