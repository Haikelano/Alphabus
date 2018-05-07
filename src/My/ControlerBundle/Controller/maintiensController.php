<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\maintiens;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Maintien controller.
 *
 * @Route("maintiens")
 */
class maintiensController extends Controller
{
    /**
     * Lists all maintien entities.
     *
     * @Route("/", name="maintiens_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $maintiens = $em->getRepository('MyControlerBundle:maintiens')->findAll();

        return $this->render('maintiens/index.html.twig', array(
            'maintiens' => $maintiens,
        ));
    }

    /**
     * Creates a new maintien entity.
     *
     * @Route("/new", name="maintiens_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $maintien = new Maintien();
        $form = $this->createForm('My\ControlerBundle\Form\maintiensType', $maintien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($maintien);
            $em->flush();

            return $this->redirectToRoute('maintiens_show', array('id' => $maintien->getId()));
        }

        return $this->render('maintiens/new.html.twig', array(
            'maintien' => $maintien,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a maintien entity.
     *
     * @Route("/{id}", name="maintiens_show")
     * @Method("GET")
     */
    public function showAction(maintiens $maintien)
    {
        $deleteForm = $this->createDeleteForm($maintien);

        return $this->render('maintiens/show.html.twig', array(
            'maintien' => $maintien,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing maintien entity.
     *
     * @Route("/{id}/edit", name="maintiens_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, maintiens $maintien)
    {
        $deleteForm = $this->createDeleteForm($maintien);
        $editForm = $this->createForm('My\ControlerBundle\Form\maintiensType', $maintien);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('maintiens_edit', array('id' => $maintien->getId()));
        }

        return $this->render('maintiens/edit.html.twig', array(
            'maintien' => $maintien,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a maintien entity.
     *
     * @Route("/{id}", name="maintiens_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, maintiens $maintien)
    {
        $form = $this->createDeleteForm($maintien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($maintien);
            $em->flush();
        }

        return $this->redirectToRoute('maintiens_index');
    }

    /**
     * Creates a form to delete a maintien entity.
     *
     * @param maintiens $maintien The maintien entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(maintiens $maintien)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('maintiens_delete', array('id' => $maintien->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
