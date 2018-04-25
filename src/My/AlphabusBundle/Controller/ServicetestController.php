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
use My\AlphabusBundle\Form\AffectationType;
use My\AlphabusBundle\Repository\AffectationRepository;
use My\AlphabusBundle\Entity\Affectation;

class ServicetestController extends Controller
{
    /**
     * @Route("/service_test" , name="service_test")
     *   * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {

        $nchassis = $request->query->get('nchassis');
        $em = $this->getDoctrine()->getManager();
        $nchassis = $em->getRepository('MyAlphabusBundle:Chassis')->findBy(array("nchassis" => $nchassis));
        $peinture = $em->getRepository('MyAlphabusBundle:Peinture')->findBy(array("chassis" => $nchassis));
        $structure = $em->getRepository('MyAlphabusBundle:Structure')->findBy(array("chassis" => $nchassis));
        $reception = $em->getRepository('MyAlphabusBundle:Receptionchassis')->findBy(array("nchassis" => $nchassis));
        return $this->render('MyAlphabusBundle:Servicetest:index.html.twig', array(
            'chassis' => $nchassis,
            'peinture' =>$peinture,
            'reception' =>$reception,
            'structure' =>$structure
        ));

    }

    /**
     * @Route("/newtest")
     */
    public function newtestAction()
    {
        return $this->render('MyAlphabusBundle:Servicetest:newtest.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/rechtest",name = "rechtest")
     * @Method({"GET", "POST"})
     *
    public function rechtestAction(Request $request)
    {
        $nchassis = $request->query->get('nchassis');
        $em = $this->getDoctrine()->getManager();
        $nchassis = $em->getRepository('MyAlphabusBundle:Chassis')->findBy(array("nchassis" => $nchassis));
        return $this->render('MyAlphabusBundle:Servicetest:index.html.twig', array(
            'chassis' => $nchassis
        ));
    }
*/

}
