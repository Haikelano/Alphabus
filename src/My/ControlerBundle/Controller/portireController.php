<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\portire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Portire controller.
 *
 * @Route("portire")
 */
class portireController extends Controller
{
    /**
     * Lists all portire entities.
     *
     * @Route("/", name="portire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $portires = $em->getRepository('MyControlerBundle:portire')->findAll();

        return $this->render('portire/index.html.twig', array(
            'portires' => $portires,
        ));
    }

    /**
     * Creates a new portire entity.
     *
     * @Route("/new", name="portire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $portire = new Portire();
        $form = $this->createForm('My\ControlerBundle\Form\portireType', $portire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($portire);
            $em->flush();

            return $this->redirectToRoute('portire_show', array('id' => $portire->getId()));
        }

        return $this->render('portire/new.html.twig', array(
            'portire' => $portire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a portire entity.
     *
     * @Route("/{id}", name="portire_show")
     * @Method("GET")
     */
    public function showAction(portire $portire)
    {
        $deleteForm = $this->createDeleteForm($portire);

        return $this->render('portire/show.html.twig', array(
            'portire' => $portire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing portire entity.
     *
     * @Route("/{id}/edit", name="portire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, portire $portire)
    {
        $deleteForm = $this->createDeleteForm($portire);
        $editForm = $this->createForm('My\ControlerBundle\Form\portireType', $portire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('portire_edit', array('id' => $portire->getId()));
        }

        return $this->render('portire/edit.html.twig', array(
            'portire' => $portire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a portire entity.
     *
     * @Route("/{id}", name="portire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, portire $portire)
    {
        $form = $this->createDeleteForm($portire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($portire);
            $em->flush();
        }

        return $this->redirectToRoute('portire_index');
    }

    /**
     * Creates a form to delete a portire entity.
     *
     * @param portire $portire The portire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(portire $portire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('portire_delete', array('id' => $portire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
