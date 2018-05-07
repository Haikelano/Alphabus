<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\documentation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Documentation controller.
 *
 * @Route("documentation")
 */
class documentationController extends Controller
{
    /**
     * Lists all documentation entities.
     *
     * @Route("/", name="documentation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentations = $em->getRepository('MyControlerBundle:documentation')->findAll();

        return $this->render('documentation/index.html.twig', array(
            'documentations' => $documentations,
        ));
    }

    /**
     * Creates a new documentation entity.
     *
     * @Route("/new", name="documentation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $documentation = new Documentation();
        $form = $this->createForm('My\ControlerBundle\Form\documentationType', $documentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($documentation);
            $em->flush();

            return $this->redirectToRoute('documentation_show', array('id' => $documentation->getId()));
        }

        return $this->render('documentation/new.html.twig', array(
            'documentation' => $documentation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a documentation entity.
     *
     * @Route("/{id}", name="documentation_show")
     * @Method("GET")
     */
    public function showAction(documentation $documentation)
    {
        $deleteForm = $this->createDeleteForm($documentation);

        return $this->render('documentation/show.html.twig', array(
            'documentation' => $documentation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing documentation entity.
     *
     * @Route("/{id}/edit", name="documentation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, documentation $documentation)
    {
        $deleteForm = $this->createDeleteForm($documentation);
        $editForm = $this->createForm('My\ControlerBundle\Form\documentationType', $documentation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('documentation_edit', array('id' => $documentation->getId()));
        }

        return $this->render('documentation/edit.html.twig', array(
            'documentation' => $documentation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a documentation entity.
     *
     * @Route("/{id}", name="documentation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, documentation $documentation)
    {
        $form = $this->createDeleteForm($documentation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documentation);
            $em->flush();
        }

        return $this->redirectToRoute('documentation_index');
    }

    /**
     * Creates a form to delete a documentation entity.
     *
     * @param documentation $documentation The documentation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(documentation $documentation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentation_delete', array('id' => $documentation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
