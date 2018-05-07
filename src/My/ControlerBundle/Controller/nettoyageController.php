<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\nettoyage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Nettoyage controller.
 *
 * @Route("nettoyage")
 */
class nettoyageController extends Controller
{
    /**
     * Lists all nettoyage entities.
     *
     * @Route("/", name="nettoyage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nettoyages = $em->getRepository('MyControlerBundle:nettoyage')->findAll();

        return $this->render('nettoyage/index.html.twig', array(
            'nettoyages' => $nettoyages,
        ));
    }

    /**
     * Creates a new nettoyage entity.
     *
     * @Route("/new", name="nettoyage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $nettoyage = new Nettoyage();
        $form = $this->createForm('My\ControlerBundle\Form\nettoyageType', $nettoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nettoyage);
            $em->flush();

            return $this->redirectToRoute('nettoyage_show', array('id' => $nettoyage->getId()));
        }

        return $this->render('nettoyage/new.html.twig', array(
            'nettoyage' => $nettoyage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nettoyage entity.
     *
     * @Route("/{id}", name="nettoyage_show")
     * @Method("GET")
     */
    public function showAction(nettoyage $nettoyage)
    {
        $deleteForm = $this->createDeleteForm($nettoyage);

        return $this->render('nettoyage/show.html.twig', array(
            'nettoyage' => $nettoyage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nettoyage entity.
     *
     * @Route("/{id}/edit", name="nettoyage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, nettoyage $nettoyage)
    {
        $deleteForm = $this->createDeleteForm($nettoyage);
        $editForm = $this->createForm('My\ControlerBundle\Form\nettoyageType', $nettoyage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nettoyage_edit', array('id' => $nettoyage->getId()));
        }

        return $this->render('nettoyage/edit.html.twig', array(
            'nettoyage' => $nettoyage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a nettoyage entity.
     *
     * @Route("/{id}", name="nettoyage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, nettoyage $nettoyage)
    {
        $form = $this->createDeleteForm($nettoyage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nettoyage);
            $em->flush();
        }

        return $this->redirectToRoute('nettoyage_index');
    }

    /**
     * Creates a form to delete a nettoyage entity.
     *
     * @param nettoyage $nettoyage The nettoyage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(nettoyage $nettoyage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nettoyage_delete', array('id' => $nettoyage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
