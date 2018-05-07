<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\vitrage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Vitrage controller.
 *
 * @Route("vitrage")
 */
class vitrageController extends Controller
{
    /**
     * Lists all vitrage entities.
     *
     * @Route("/", name="vitrage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vitrages = $em->getRepository('MyControlerBundle:vitrage')->findAll();

        return $this->render('vitrage/index.html.twig', array(
            'vitrages' => $vitrages,
        ));
    }

    /**
     * Creates a new vitrage entity.
     *
     * @Route("/new", name="vitrage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $vitrage = new Vitrage();
        $form = $this->createForm('My\ControlerBundle\Form\vitrageType', $vitrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vitrage);
            $em->flush();

            return $this->redirectToRoute('vitrage_show', array('id' => $vitrage->getId()));
        }

        return $this->render('vitrage/new.html.twig', array(
            'vitrage' => $vitrage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vitrage entity.
     *
     * @Route("/{id}", name="vitrage_show")
     * @Method("GET")
     */
    public function showAction(vitrage $vitrage)
    {
        $deleteForm = $this->createDeleteForm($vitrage);

        return $this->render('vitrage/show.html.twig', array(
            'vitrage' => $vitrage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vitrage entity.
     *
     * @Route("/{id}/edit", name="vitrage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, vitrage $vitrage)
    {
        $deleteForm = $this->createDeleteForm($vitrage);
        $editForm = $this->createForm('My\ControlerBundle\Form\vitrageType', $vitrage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vitrage_edit', array('id' => $vitrage->getId()));
        }

        return $this->render('vitrage/edit.html.twig', array(
            'vitrage' => $vitrage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vitrage entity.
     *
     * @Route("/{id}", name="vitrage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, vitrage $vitrage)
    {
        $form = $this->createDeleteForm($vitrage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vitrage);
            $em->flush();
        }

        return $this->redirectToRoute('vitrage_index');
    }

    /**
     * Creates a form to delete a vitrage entity.
     *
     * @param vitrage $vitrage The vitrage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(vitrage $vitrage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vitrage_delete', array('id' => $vitrage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
