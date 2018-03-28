<?php

namespace My\AlphabusBundle\Controller;

use My\AlphabusBundle\Entity\Affectation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Affectation controller.
 *
 * @Route("affectation")
 */
class AffectationController extends Controller
{
    /**
     * Lists all affectation entities.
     *
     * @Route("/", name="affectation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $affectations = $em->getRepository('MyAlphabusBundle:Affectation')->findAll();

        return $this->render('affectation/index.html.twig', array(
            'affectations' => $affectations,
        ));
    }

    /**
     * Creates a new affectation entity.
     *
     * @Route("/new", name="affectation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $affectation = new Affectation();
        $form = $this->createForm('My\AlphabusBundle\Form\AffectationType', $affectation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($affectation);
            $em->flush();

            return $this->redirectToRoute('affectation_show', array('id' => $affectation->getId()));
        }

        return $this->render('affectation/new.html.twig', array(
            'affectation' => $affectation,
            'form' => $form->createView(),
        ));
    }



    /**
     * Displays a form to edit an existing affectation entity.
     *
     * @Route("/{id}/edit", name="affectation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Affectation $affectation)
    {
        $deleteForm = $this->createDeleteForm($affectation);
        $editForm = $this->createForm('My\AlphabusBundle\Form\AffectationType', $affectation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('affectation_edit', array('id' => $affectation->getId()));
        }

        return $this->render('affectation/edit.html.twig', array(
            'affectation' => $affectation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a affectation entity.
     *
     * @Route("/{id}", name="affectation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Affectation $affectation)
    {
        $form = $this->createDeleteForm($affectation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($affectation);
            $em->flush();
        }

        return $this->redirectToRoute('affectation_index');
    }
    /**
     * Finds and displays a affectation entity.
     *
     * @Route("/{id}", name="affectation_show")
     * @Method("GET")
     */
    public function showAction(Affectation $affectation)
    {
        $deleteForm = $this->createDeleteForm($affectation);

        return $this->render('affectation/show.html.twig', array(
            'affectation' => $affectation,
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Creates a form to delete a affectation entity.
     *
     * @param Affectation $affectation The affectation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Affectation $affectation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affectation_delete', array('id' => $affectation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
