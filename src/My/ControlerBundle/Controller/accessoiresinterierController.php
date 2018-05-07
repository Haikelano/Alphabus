<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\accessoiresinterier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Accessoiresinterier controller.
 *
 * @Route("accessoiresinterier")
 */
class accessoiresinterierController extends Controller
{
    /**
     * Lists all accessoiresinterier entities.
     *
     * @Route("/", name="accessoiresinterier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accessoiresinteriers = $em->getRepository('MyControlerBundle:accessoiresinterier')->findAll();

        return $this->render('accessoiresinterier/index.html.twig', array(
            'accessoiresinteriers' => $accessoiresinteriers,
        ));
    }

    /**
     * Creates a new accessoiresinterier entity.
     *
     * @Route("/new", name="accessoiresinterier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $accessoiresinterier = new Accessoiresinterier();
        $form = $this->createForm('My\ControlerBundle\Form\accessoiresinterierType', $accessoiresinterier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accessoiresinterier);
            $em->flush();

            return $this->redirectToRoute('accessoiresinterier_show', array('id' => $accessoiresinterier->getId()));
        }

        return $this->render('accessoiresinterier/new.html.twig', array(
            'accessoiresinterier' => $accessoiresinterier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a accessoiresinterier entity.
     *
     * @Route("/{id}", name="accessoiresinterier_show")
     * @Method("GET")
     */
    public function showAction(accessoiresinterier $accessoiresinterier)
    {
        $deleteForm = $this->createDeleteForm($accessoiresinterier);

        return $this->render('accessoiresinterier/show.html.twig', array(
            'accessoiresinterier' => $accessoiresinterier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing accessoiresinterier entity.
     *
     * @Route("/{id}/edit", name="accessoiresinterier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, accessoiresinterier $accessoiresinterier)
    {
        $deleteForm = $this->createDeleteForm($accessoiresinterier);
        $editForm = $this->createForm('My\ControlerBundle\Form\accessoiresinterierType', $accessoiresinterier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accessoiresinterier_edit', array('id' => $accessoiresinterier->getId()));
        }

        return $this->render('accessoiresinterier/edit.html.twig', array(
            'accessoiresinterier' => $accessoiresinterier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a accessoiresinterier entity.
     *
     * @Route("/{id}", name="accessoiresinterier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, accessoiresinterier $accessoiresinterier)
    {
        $form = $this->createDeleteForm($accessoiresinterier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($accessoiresinterier);
            $em->flush();
        }

        return $this->redirectToRoute('accessoiresinterier_index');
    }

    /**
     * Creates a form to delete a accessoiresinterier entity.
     *
     * @param accessoiresinterier $accessoiresinterier The accessoiresinterier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(accessoiresinterier $accessoiresinterier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accessoiresinterier_delete', array('id' => $accessoiresinterier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
