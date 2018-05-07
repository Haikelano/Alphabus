<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\chauffage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Chauffage controller.
 *
 * @Route("chauffage")
 */
class chauffageController extends Controller
{
    /**
     * Lists all chauffage entities.
     *
     * @Route("/", name="chauffage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chauffages = $em->getRepository('MyControlerBundle:chauffage')->findAll();

        return $this->render('chauffage/index.html.twig', array(
            'chauffages' => $chauffages,
        ));
    }

    /**
     * Creates a new chauffage entity.
     *
     * @Route("/new", name="chauffage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chauffage = new Chauffage();
        $form = $this->createForm('My\ControlerBundle\Form\chauffageType', $chauffage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chauffage);
            $em->flush();

            return $this->redirectToRoute('chauffage_show', array('id' => $chauffage->getId()));
        }

        return $this->render('chauffage/new.html.twig', array(
            'chauffage' => $chauffage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chauffage entity.
     *
     * @Route("/{id}", name="chauffage_show")
     * @Method("GET")
     */
    public function showAction(chauffage $chauffage)
    {
        $deleteForm = $this->createDeleteForm($chauffage);

        return $this->render('chauffage/show.html.twig', array(
            'chauffage' => $chauffage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chauffage entity.
     *
     * @Route("/{id}/edit", name="chauffage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, chauffage $chauffage)
    {
        $deleteForm = $this->createDeleteForm($chauffage);
        $editForm = $this->createForm('My\ControlerBundle\Form\chauffageType', $chauffage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chauffage_edit', array('id' => $chauffage->getId()));
        }

        return $this->render('chauffage/edit.html.twig', array(
            'chauffage' => $chauffage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chauffage entity.
     *
     * @Route("/{id}", name="chauffage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, chauffage $chauffage)
    {
        $form = $this->createDeleteForm($chauffage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chauffage);
            $em->flush();
        }

        return $this->redirectToRoute('chauffage_index');
    }

    /**
     * Creates a form to delete a chauffage entity.
     *
     * @param chauffage $chauffage The chauffage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(chauffage $chauffage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chauffage_delete', array('id' => $chauffage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
