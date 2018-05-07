<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\tapisserie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tapisserie controller.
 *
 * @Route("tapisserie")
 */
class tapisserieController extends Controller
{
    /**
     * Lists all tapisserie entities.
     *
     * @Route("/", name="tapisserie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tapisseries = $em->getRepository('MyControlerBundle:tapisserie')->findAll();

        return $this->render('tapisserie/index.html.twig', array(
            'tapisseries' => $tapisseries,
        ));
    }

    /**
     * Creates a new tapisserie entity.
     *
     * @Route("/new", name="tapisserie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tapisserie = new Tapisserie();
        $form = $this->createForm('My\ControlerBundle\Form\tapisserieType', $tapisserie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tapisserie);
            $em->flush();

            return $this->redirectToRoute('tapisserie_show', array('id' => $tapisserie->getId()));
        }

        return $this->render('tapisserie/new.html.twig', array(
            'tapisserie' => $tapisserie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tapisserie entity.
     *
     * @Route("/{id}", name="tapisserie_show")
     * @Method("GET")
     */
    public function showAction(tapisserie $tapisserie)
    {
        $deleteForm = $this->createDeleteForm($tapisserie);

        return $this->render('tapisserie/show.html.twig', array(
            'tapisserie' => $tapisserie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tapisserie entity.
     *
     * @Route("/{id}/edit", name="tapisserie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, tapisserie $tapisserie)
    {
        $deleteForm = $this->createDeleteForm($tapisserie);
        $editForm = $this->createForm('My\ControlerBundle\Form\tapisserieType', $tapisserie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tapisserie_edit', array('id' => $tapisserie->getId()));
        }

        return $this->render('tapisserie/edit.html.twig', array(
            'tapisserie' => $tapisserie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tapisserie entity.
     *
     * @Route("/{id}", name="tapisserie_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, tapisserie $tapisserie)
    {
        $form = $this->createDeleteForm($tapisserie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tapisserie);
            $em->flush();
        }

        return $this->redirectToRoute('tapisserie_index');
    }

    /**
     * Creates a form to delete a tapisserie entity.
     *
     * @param tapisserie $tapisserie The tapisserie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(tapisserie $tapisserie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tapisserie_delete', array('id' => $tapisserie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
