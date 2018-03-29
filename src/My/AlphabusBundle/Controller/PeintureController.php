<?php

namespace My\AlphabusBundle\Controller;

use My\AlphabusBundle\Entity\Peinture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Peinture controller.
 *
 * @Route("peinture")
 */
class PeintureController extends Controller
{
    /**
     * Lists all peinture entities.
     *
     * @Route("/", name="peinture_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $peintures = $em->getRepository('MyAlphabusBundle:Peinture')->findAll();

        return $this->render('peinture/index.html.twig', array(
            'peintures' => $peintures,
        ));
    }

    /**
     * Creates a new peinture entity.
     *
     * @Route("/new", name="peinture_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $peinture = new Peinture();
        $form = $this->createForm('My\AlphabusBundle\Form\PeintureType', $peinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($peinture);
            $em->flush();

            return $this->redirectToRoute('peinture_show', array('id' => $peinture->getId()));
        }

        return $this->render('peinture/new.html.twig', array(
            'peinture' => $peinture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a peinture entity.
     *
     * @Route("/{id}", name="peinture_show")
     * @Method("GET")
     */
    public function showAction(Peinture $peinture)
    {
        $deleteForm = $this->createDeleteForm($peinture);

        return $this->render('peinture/show.html.twig', array(
            'peinture' => $peinture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing peinture entity.
     *
     * @Route("/{id}/edit", name="peinture_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Peinture $peinture)
    {
        $deleteForm = $this->createDeleteForm($peinture);
        $editForm = $this->createForm('My\AlphabusBundle\Form\PeintureType', $peinture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('peinture_edit', array('id' => $peinture->getId()));
        }

        return $this->render('peinture/edit.html.twig', array(
            'peinture' => $peinture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a peinture entity.
     *
     * @Route("/{id}", name="peinture_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Peinture $peinture)
    {
        $form = $this->createDeleteForm($peinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($peinture);
            $em->flush();
        }

        return $this->redirectToRoute('peinture_index');
    }

    /**
     * Creates a form to delete a peinture entity.
     *
     * @param Peinture $peinture The peinture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Peinture $peinture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('peinture_delete', array('id' => $peinture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
