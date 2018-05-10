<?php

namespace My\ControlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use My\AlphabusBundle\Entity\Chassis;
use My\AlphabusBundle\Form\ChassisType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use My\AlphabusBundle\Form\AffectationType;
use My\AlphabusBundle\Repository\AffectationRepository;
use My\AlphabusBundle\Entity\Affectation;
use  My\ControlerBundle\Entity\basdecaisse;
use My\ControlerBundle\Entity\accessoiresinterier;
use My\ControlerBundle\Entity\Accesoirexterieur;
use My\ControlerBundle\Entity\centralebatteries;

class ServiceCarroserieController extends Controller
{
    /**
     * * @Route("/carrosserie" , name="carrosserie")
     *   * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request )
    {


        $nchassis = $request->query->get('nchassis');

        $em = $this->getDoctrine()->getManager();
        /* conaitre le client */
        $client = $em->getRepository('MyAlphabusBundle:Affectation')->findBy(array('chassis' => $nchassis));

        $nchassis = $em->getRepository('MyAlphabusBundle:Chassis')->findBy(array("nchassis" => $nchassis));
        $basdecaisse = $em->getRepository('MyControlerBundle:basdecaisse')->findBy(array("chassis" => $nchassis));
        $accesoirexterieur=$em->getRepository('MyControlerBundle:Accesoirexterieur')->findBy(array("chassis" => $nchassis));
        $circuit=$em->getRepository('MyControlerBundle:circuitelectrique')->findBy(array("chassis" => $nchassis));
        $centralebatteries=$em->getRepository('MyControlerBundle:centralebatteries')->findBy(array("chassis" => $nchassis));

        return $this->render('MyControlerBundle:ServiceCarroserie:index.html.twig', array(
            'centralebatteries' =>$centralebatteries,
            'client' => $client,
            'circuit' => $circuit,
            'accesoirexterieur'=>$accesoirexterieur,
            'basdecaisse' =>$basdecaisse,
            'chassis' => $nchassis

        ));
    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('MyControlerBundle:ServiceCarroserie:new.html.twig', array(
            // ...
        ));
    }

}
