<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\soutebagage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Soutebagage controller.
 *
 * @Route("soutebagage")
 */
class soutebagageController extends Controller
{
    /**
     * Lists all soutebagage entities.
     *
     * @Route("/", name="soutebagage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $soutebagages = $em->getRepository('MyControlerBundle:soutebagage')->findAll();

        return $this->render('soutebagage/index.html.twig', array(
            'soutebagages' => $soutebagages,
        ));
    }

    /**
     * Creates a new soutebagage entity.
     *
     * @Route("/new", name="soutebagage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $soutebagage = new Soutebagage();
        $form = $this->createForm('My\ControlerBundle\Form\soutebagageType', $soutebagage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($soutebagage);
            $em->flush();

            return $this->redirectToRoute('soutebagage_show', array('id' => $soutebagage->getId()));
        }

        return $this->render('soutebagage/new.html.twig', array(
            'soutebagage' => $soutebagage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a soutebagage entity.
     *
     * @Route("/{id}", name="soutebagage_show")
     * @Method("GET")
     */
    public function showAction(soutebagage $soutebagage)
    {
        $deleteForm = $this->createDeleteForm($soutebagage);

        return $this->render('soutebagage/show.html.twig', array(
            'soutebagage' => $soutebagage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing soutebagage entity.
     *
     * @Route("/{id}/edit", name="soutebagage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, soutebagage $soutebagage)
    {
        $deleteForm = $this->createDeleteForm($soutebagage);
        $editForm = $this->createForm('My\ControlerBundle\Form\soutebagageType', $soutebagage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('soutebagage_edit', array('id' => $soutebagage->getId()));
        }

        return $this->render('soutebagage/edit.html.twig', array(
            'soutebagage' => $soutebagage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a soutebagage entity.
     *
     * @Route("/{id}", name="soutebagage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, soutebagage $soutebagage)
    {
        $form = $this->createDeleteForm($soutebagage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($soutebagage);
            $em->flush();
        }

        return $this->redirectToRoute('soutebagage_index');
    }

    /**
     * Creates a form to delete a soutebagage entity.
     *
     * @param soutebagage $soutebagage The soutebagage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(soutebagage $soutebagage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soutebagage_delete', array('id' => $soutebagage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
