<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\centralebatteries;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Centralebattery controller.
 *
 * @Route("centralebatteries")
 */
class centralebatteriesController extends Controller
{
    /**
     * Lists all centralebattery entities.
     *
     * @Route("/", name="centralebatteries_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $centralebatteries = $em->getRepository('MyControlerBundle:centralebatteries')->findAll();

        return $this->render('centralebatteries/index.html.twig', array(
            'centralebatteries' => $centralebatteries,
        ));
    }

    /**
     * Creates a new centralebattery entity.
     *
     * @Route("/new", name="centralebatteries_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $centralebattery = new Centralebattery();
        $form = $this->createForm('My\ControlerBundle\Form\centralebatteriesType', $centralebattery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($centralebattery);
            $em->flush();

            return $this->redirectToRoute('centralebatteries_show', array('id' => $centralebattery->getId()));
        }

        return $this->render('centralebatteries/new.html.twig', array(
            'centralebattery' => $centralebattery,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a centralebattery entity.
     *
     * @Route("/{id}", name="centralebatteries_show")
     * @Method("GET")
     */
    public function showAction(centralebatteries $centralebattery)
    {
        $deleteForm = $this->createDeleteForm($centralebattery);

        return $this->render('centralebatteries/show.html.twig', array(
            'centralebattery' => $centralebattery,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing centralebattery entity.
     *
     * @Route("/{id}/edit", name="centralebatteries_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, centralebatteries $centralebattery)
    {
        $deleteForm = $this->createDeleteForm($centralebattery);
        $editForm = $this->createForm('My\ControlerBundle\Form\centralebatteriesType', $centralebattery);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('centralebatteries_edit', array('id' => $centralebattery->getId()));
        }

        return $this->render('centralebatteries/edit.html.twig', array(
            'centralebattery' => $centralebattery,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a centralebattery entity.
     *
     * @Route("/{id}", name="centralebatteries_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, centralebatteries $centralebattery)
    {
        $form = $this->createDeleteForm($centralebattery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($centralebattery);
            $em->flush();
        }

        return $this->redirectToRoute('centralebatteries_index');
    }

    /**
     * Creates a form to delete a centralebattery entity.
     *
     * @param centralebatteries $centralebattery The centralebattery entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(centralebatteries $centralebattery)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('centralebatteries_delete', array('id' => $centralebattery->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
