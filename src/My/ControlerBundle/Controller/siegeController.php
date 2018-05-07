<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\siege;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Siege controller.
 *
 * @Route("siege")
 */
class siegeController extends Controller
{
    /**
     * Lists all siege entities.
     *
     * @Route("/", name="siege_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sieges = $em->getRepository('MyControlerBundle:siege')->findAll();

        return $this->render('siege/index.html.twig', array(
            'sieges' => $sieges,
        ));
    }

    /**
     * Creates a new siege entity.
     *
     * @Route("/new", name="siege_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $siege = new Siege();
        $form = $this->createForm('My\ControlerBundle\Form\siegeType', $siege);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($siege);
            $em->flush();

            return $this->redirectToRoute('siege_show', array('id' => $siege->getId()));
        }

        return $this->render('siege/new.html.twig', array(
            'siege' => $siege,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a siege entity.
     *
     * @Route("/{id}", name="siege_show")
     * @Method("GET")
     */
    public function showAction(siege $siege)
    {
        $deleteForm = $this->createDeleteForm($siege);

        return $this->render('siege/show.html.twig', array(
            'siege' => $siege,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing siege entity.
     *
     * @Route("/{id}/edit", name="siege_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, siege $siege)
    {
        $deleteForm = $this->createDeleteForm($siege);
        $editForm = $this->createForm('My\ControlerBundle\Form\siegeType', $siege);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('siege_edit', array('id' => $siege->getId()));
        }

        return $this->render('siege/edit.html.twig', array(
            'siege' => $siege,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a siege entity.
     *
     * @Route("/{id}", name="siege_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, siege $siege)
    {
        $form = $this->createDeleteForm($siege);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($siege);
            $em->flush();
        }

        return $this->redirectToRoute('siege_index');
    }

    /**
     * Creates a form to delete a siege entity.
     *
     * @param siege $siege The siege entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(siege $siege)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('siege_delete', array('id' => $siege->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
