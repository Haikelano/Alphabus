<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\securite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Securite controller.
 *
 * @Route("securite")
 */
class securiteController extends Controller
{
    /**
     * Lists all securite entities.
     *
     * @Route("/", name="securite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $securites = $em->getRepository('MyControlerBundle:securite')->findAll();

        return $this->render('securite/index.html.twig', array(
            'securites' => $securites,
        ));
    }

    /**
     * Creates a new securite entity.
     *
     * @Route("/new", name="securite_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $securite = new Securite();
        $form = $this->createForm('My\ControlerBundle\Form\securiteType', $securite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($securite);
            $em->flush();

            return $this->redirectToRoute('securite_show', array('id' => $securite->getId()));
        }

        return $this->render('securite/new.html.twig', array(
            'securite' => $securite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a securite entity.
     *
     * @Route("/{id}", name="securite_show")
     * @Method("GET")
     */
    public function showAction(securite $securite)
    {
        $deleteForm = $this->createDeleteForm($securite);

        return $this->render('securite/show.html.twig', array(
            'securite' => $securite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing securite entity.
     *
     * @Route("/{id}/edit", name="securite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, securite $securite)
    {
        $deleteForm = $this->createDeleteForm($securite);
        $editForm = $this->createForm('My\ControlerBundle\Form\securiteType', $securite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('securite_edit', array('id' => $securite->getId()));
        }

        return $this->render('securite/edit.html.twig', array(
            'securite' => $securite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a securite entity.
     *
     * @Route("/{id}", name="securite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, securite $securite)
    {
        $form = $this->createDeleteForm($securite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($securite);
            $em->flush();
        }

        return $this->redirectToRoute('securite_index');
    }

    /**
     * Creates a form to delete a securite entity.
     *
     * @param securite $securite The securite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(securite $securite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('securite_delete', array('id' => $securite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
