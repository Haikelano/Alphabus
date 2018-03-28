<?php

namespace My\AlphabusBundle\Controller;

use My\AlphabusBundle\Entity\Structure;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Structure controller.
 *
 * @Route("structure")
 */
class StructureController extends Controller
{
    /**
     * Lists all structure entities.
     *
     * @Route("/", name="structure_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $structures = $em->getRepository('MyAlphabusBundle:Structure')->findAll();

        return $this->render('structure/index.html.twig', array(
            'structures' => $structures,
        ));
    }

    /**
     * Creates a new structure entity.
     *
     * @Route("/new", name="structure_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $structure = new Structure();
        $form = $this->createForm('My\AlphabusBundle\Form\StructureType', $structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($structure);
            $em->flush();

            return $this->redirectToRoute('structure_show', array('id' => $structure->getId()));
        }

        return $this->render('structure/new.html.twig', array(
            'structure' => $structure,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a structure entity.
     *
     * @Route("/{id}", name="structure_show")
     * @Method("GET")
     */
    public function showAction(Structure $structure)
    {
        $deleteForm = $this->createDeleteForm($structure);

        return $this->render('structure/show.html.twig', array(
            'structure' => $structure,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing structure entity.
     *
     * @Route("/{id}/edit", name="structure_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Structure $structure)
    {
        $deleteForm = $this->createDeleteForm($structure);
        $editForm = $this->createForm('My\AlphabusBundle\Form\StructureType', $structure);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('structure_edit', array('id' => $structure->getId()));
        }

        return $this->render('structure/edit.html.twig', array(
            'structure' => $structure,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a structure entity.
     *
     * @Route("/{id}", name="structure_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Structure $structure)
    {
        $form = $this->createDeleteForm($structure);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($structure);
            $em->flush();
        }

        return $this->redirectToRoute('structure_index');
    }

    /**
     * Creates a form to delete a structure entity.
     *
     * @param Structure $structure The structure entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Structure $structure)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('structure_delete', array('id' => $structure->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
