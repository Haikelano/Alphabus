<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\climatisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Climatisation controller.
 *
 * @Route("climatisation")
 */
class climatisationController extends Controller
{
    /**
     * Lists all climatisation entities.
     *
     * @Route("/", name="climatisation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $climatisations = $em->getRepository('MyControlerBundle:climatisation')->findAll();

        return $this->render('climatisation/index.html.twig', array(
            'climatisations' => $climatisations,
        ));
    }

    /**
     * Creates a new climatisation entity.
     *
     * @Route("/new", name="climatisation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $climatisation = new Climatisation();
        $form = $this->createForm('My\ControlerBundle\Form\climatisationType', $climatisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($climatisation);
            $em->flush();

            return $this->redirectToRoute('climatisation_show', array('id' => $climatisation->getId()));
        }

        return $this->render('climatisation/new.html.twig', array(
            'climatisation' => $climatisation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a climatisation entity.
     *
     * @Route("/{id}", name="climatisation_show")
     * @Method("GET")
     */
    public function showAction(climatisation $climatisation)
    {
        $deleteForm = $this->createDeleteForm($climatisation);

        return $this->render('climatisation/show.html.twig', array(
            'climatisation' => $climatisation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing climatisation entity.
     *
     * @Route("/{id}/edit", name="climatisation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, climatisation $climatisation)
    {
        $deleteForm = $this->createDeleteForm($climatisation);
        $editForm = $this->createForm('My\ControlerBundle\Form\climatisationType', $climatisation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('climatisation_edit', array('id' => $climatisation->getId()));
        }

        return $this->render('climatisation/edit.html.twig', array(
            'climatisation' => $climatisation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a climatisation entity.
     *
     * @Route("/{id}", name="climatisation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, climatisation $climatisation)
    {
        $form = $this->createDeleteForm($climatisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($climatisation);
            $em->flush();
        }

        return $this->redirectToRoute('climatisation_index');
    }

    /**
     * Creates a form to delete a climatisation entity.
     *
     * @param climatisation $climatisation The climatisation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(climatisation $climatisation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('climatisation_delete', array('id' => $climatisation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
