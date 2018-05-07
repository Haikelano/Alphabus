<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\testetancheite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Testetancheite controller.
 *
 * @Route("testetancheite")
 */
class testetancheiteController extends Controller
{
    /**
     * Lists all testetancheite entities.
     *
     * @Route("/", name="testetancheite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $testetancheites = $em->getRepository('MyControlerBundle:testetancheite')->findAll();

        return $this->render('testetancheite/index.html.twig', array(
            'testetancheites' => $testetancheites,
        ));
    }

    /**
     * Creates a new testetancheite entity.
     *
     * @Route("/new", name="testetancheite_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $testetancheite = new Testetancheite();
        $form = $this->createForm('My\ControlerBundle\Form\testetancheiteType', $testetancheite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($testetancheite);
            $em->flush();

            return $this->redirectToRoute('testetancheite_show', array('id' => $testetancheite->getId()));
        }

        return $this->render('testetancheite/new.html.twig', array(
            'testetancheite' => $testetancheite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a testetancheite entity.
     *
     * @Route("/{id}", name="testetancheite_show")
     * @Method("GET")
     */
    public function showAction(testetancheite $testetancheite)
    {
        $deleteForm = $this->createDeleteForm($testetancheite);

        return $this->render('testetancheite/show.html.twig', array(
            'testetancheite' => $testetancheite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing testetancheite entity.
     *
     * @Route("/{id}/edit", name="testetancheite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, testetancheite $testetancheite)
    {
        $deleteForm = $this->createDeleteForm($testetancheite);
        $editForm = $this->createForm('My\ControlerBundle\Form\testetancheiteType', $testetancheite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('testetancheite_edit', array('id' => $testetancheite->getId()));
        }

        return $this->render('testetancheite/edit.html.twig', array(
            'testetancheite' => $testetancheite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a testetancheite entity.
     *
     * @Route("/{id}", name="testetancheite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, testetancheite $testetancheite)
    {
        $form = $this->createDeleteForm($testetancheite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($testetancheite);
            $em->flush();
        }

        return $this->redirectToRoute('testetancheite_index');
    }

    /**
     * Creates a form to delete a testetancheite entity.
     *
     * @param testetancheite $testetancheite The testetancheite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(testetancheite $testetancheite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('testetancheite_delete', array('id' => $testetancheite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
