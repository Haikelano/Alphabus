<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\roues;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Roue controller.
 *
 * @Route("roues")
 */
class rouesController extends Controller
{
    /**
     * Lists all roue entities.
     *
     * @Route("/", name="roues_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $roues = $em->getRepository('MyControlerBundle:roues')->findAll();

        return $this->render('roues/index.html.twig', array(
            'roues' => $roues,
        ));
    }

    /**
     * Creates a new roue entity.
     *
     * @Route("/new", name="roues_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $roue = new Roue();
        $form = $this->createForm('My\ControlerBundle\Form\rouesType', $roue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($roue);
            $em->flush();

            return $this->redirectToRoute('roues_show', array('id' => $roue->getId()));
        }

        return $this->render('roues/new.html.twig', array(
            'roue' => $roue,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a roue entity.
     *
     * @Route("/{id}", name="roues_show")
     * @Method("GET")
     */
    public function showAction(roues $roue)
    {
        $deleteForm = $this->createDeleteForm($roue);

        return $this->render('roues/show.html.twig', array(
            'roue' => $roue,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing roue entity.
     *
     * @Route("/{id}/edit", name="roues_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, roues $roue)
    {
        $deleteForm = $this->createDeleteForm($roue);
        $editForm = $this->createForm('My\ControlerBundle\Form\rouesType', $roue);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('roues_edit', array('id' => $roue->getId()));
        }

        return $this->render('roues/edit.html.twig', array(
            'roue' => $roue,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a roue entity.
     *
     * @Route("/{id}", name="roues_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, roues $roue)
    {
        $form = $this->createDeleteForm($roue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($roue);
            $em->flush();
        }

        return $this->redirectToRoute('roues_index');
    }

    /**
     * Creates a form to delete a roue entity.
     *
     * @param roues $roue The roue entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(roues $roue)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('roues_delete', array('id' => $roue->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
