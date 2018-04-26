<?php

namespace My\AlphabusBundle\Controller;

use My\AlphabusBundle\Entity\Receptionchassis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use My\AlphabusBundle\Form\ReceptionchassisType;
use My\AlphabusBundle\Entity\Chassis;
use My\AlphabusBundle\Repository\ReceptionchassisRepository;
use My\AlphabusBundle\Form\ChassisType;
/**
 * Receptionchassi controller.
 *
 * @Route("receptionchassis")
 */
class ReceptionchassisController extends Controller
{
    /**
     * Lists all receptionchassi entities.
     *
     * @Route("/", name="receptionchassis_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $receptionchasses = $em->getRepository('MyAlphabusBundle:Receptionchassis')->findAll();

        return $this->render('receptionchassis/index.html.twig', array(
            'receptionchasses' => $receptionchasses,
        ));
    }
 
    /**
     * Creates a new receptionchassi entity.
     *
     * @Route("/new", name="receptionchassis_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $receptionchassis = new Receptionchassis();
        $form = $this->createForm('My\AlphabusBundle\Form\ReceptionchassisType', $receptionchassis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($receptionchassis);
            $em->flush();

            return $this->redirectToRoute('receptionchassis_show', array('id' => $receptionchassis->getId()));
        }

        return $this->render('receptionchassis/new.html.twig', array(
            'receptionchassis' => $receptionchassis,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a receptionchassi entity.
     *
     * @Route("/{id}", name="receptionchassis_show")
     * @Method("GET")
     */
    public function showAction(Receptionchassis $receptionchassi)
    {
        $deleteForm = $this->createDeleteForm($receptionchassi);

        return $this->render('receptionchassis/show.html.twig', array(
            'receptionchassi' => $receptionchassi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing receptionchassi entity.
     *
     * @Route("/{id}/edit", name="receptionchassis_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Receptionchassis $receptionchassi)
    {
        $deleteForm = $this->createDeleteForm($receptionchassi);
        $editForm = $this->createForm('My\AlphabusBundle\Form\ReceptionchassisType', $receptionchassi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('receptionchassis_edit', array('id' => $receptionchassi->getId()));
        }

        return $this->render('receptionchassis/edit.html.twig', array(
            'receptionchassi' => $receptionchassi,
            'delete_form'=>$deleteForm->createView(),
            'f' => $editForm->createView(),

        ));
    }

    /**
     * Deletes a receptionchassi entity.
     *
     * @Route("/{id}", name="receptionchassis_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Receptionchassis $receptionchassi)
    {
        $form = $this->createDeleteForm($receptionchassi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($receptionchassi);
            $em->flush();
        }

        return $this->redirectToRoute('receptionchassis_index');
    }

    /**
     * Creates a form to delete a receptionchassi entity.
     *
     * @param Receptionchassis $receptionchassi The receptionchassi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Receptionchassis $receptionchassi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('receptionchassis_delete', array('id' => $receptionchassi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
