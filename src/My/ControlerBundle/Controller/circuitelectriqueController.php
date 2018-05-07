<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\circuitelectrique;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Circuitelectrique controller.
 *
 * @Route("circuitelectrique")
 */
class circuitelectriqueController extends Controller
{
    /**
     * Lists all circuitelectrique entities.
     *
     * @Route("/", name="circuitelectrique_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuitelectriques = $em->getRepository('MyControlerBundle:circuitelectrique')->findAll();

        return $this->render('circuitelectrique/index.html.twig', array(
            'circuitelectriques' => $circuitelectriques,
        ));
    }

    /**
     * Creates a new circuitelectrique entity.
     *
     * @Route("/new", name="circuitelectrique_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $circuitelectrique = new Circuitelectrique();
        $form = $this->createForm('My\ControlerBundle\Form\circuitelectriqueType', $circuitelectrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($circuitelectrique);
            $em->flush();

            return $this->redirectToRoute('circuitelectrique_show', array('id' => $circuitelectrique->getId()));
        }

        return $this->render('circuitelectrique/new.html.twig', array(
            'circuitelectrique' => $circuitelectrique,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a circuitelectrique entity.
     *
     * @Route("/{id}", name="circuitelectrique_show")
     * @Method("GET")
     */
    public function showAction(circuitelectrique $circuitelectrique)
    {
        $deleteForm = $this->createDeleteForm($circuitelectrique);

        return $this->render('circuitelectrique/show.html.twig', array(
            'circuitelectrique' => $circuitelectrique,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing circuitelectrique entity.
     *
     * @Route("/{id}/edit", name="circuitelectrique_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, circuitelectrique $circuitelectrique)
    {
        $deleteForm = $this->createDeleteForm($circuitelectrique);
        $editForm = $this->createForm('My\ControlerBundle\Form\circuitelectriqueType', $circuitelectrique);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('circuitelectrique_edit', array('id' => $circuitelectrique->getId()));
        }

        return $this->render('circuitelectrique/edit.html.twig', array(
            'circuitelectrique' => $circuitelectrique,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a circuitelectrique entity.
     *
     * @Route("/{id}", name="circuitelectrique_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, circuitelectrique $circuitelectrique)
    {
        $form = $this->createDeleteForm($circuitelectrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($circuitelectrique);
            $em->flush();
        }

        return $this->redirectToRoute('circuitelectrique_index');
    }

    /**
     * Creates a form to delete a circuitelectrique entity.
     *
     * @param circuitelectrique $circuitelectrique The circuitelectrique entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(circuitelectrique $circuitelectrique)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('circuitelectrique_delete', array('id' => $circuitelectrique->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
