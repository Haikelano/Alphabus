<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\essaideroute;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Essaideroute controller.
 *
 * @Route("essaideroute")
 */
class essaiderouteController extends Controller
{
    /**
     * Lists all essaideroute entities.
     *
     * @Route("/", name="essaideroute_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $essaideroutes = $em->getRepository('MyControlerBundle:essaideroute')->findAll();

        return $this->render('essaideroute/index.html.twig', array(
            'essaideroutes' => $essaideroutes,
        ));
    }

    /**
     * Creates a new essaideroute entity.
     *
     * @Route("/new", name="essaideroute_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $essaideroute = new Essaideroute();
        $form = $this->createForm('My\ControlerBundle\Form\essaiderouteType', $essaideroute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($essaideroute);
            $em->flush();

            return $this->redirectToRoute('essaideroute_show', array('id' => $essaideroute->getId()));
        }

        return $this->render('essaideroute/new.html.twig', array(
            'essaideroute' => $essaideroute,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a essaideroute entity.
     *
     * @Route("/{id}", name="essaideroute_show")
     * @Method("GET")
     */
    public function showAction(essaideroute $essaideroute)
    {
        $deleteForm = $this->createDeleteForm($essaideroute);

        return $this->render('essaideroute/show.html.twig', array(
            'essaideroute' => $essaideroute,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing essaideroute entity.
     *
     * @Route("/{id}/edit", name="essaideroute_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, essaideroute $essaideroute)
    {
        $deleteForm = $this->createDeleteForm($essaideroute);
        $editForm = $this->createForm('My\ControlerBundle\Form\essaiderouteType', $essaideroute);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('essaideroute_edit', array('id' => $essaideroute->getId()));
        }

        return $this->render('essaideroute/edit.html.twig', array(
            'essaideroute' => $essaideroute,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a essaideroute entity.
     *
     * @Route("/{id}", name="essaideroute_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, essaideroute $essaideroute)
    {
        $form = $this->createDeleteForm($essaideroute);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($essaideroute);
            $em->flush();
        }

        return $this->redirectToRoute('essaideroute_index');
    }

    /**
     * Creates a form to delete a essaideroute entity.
     *
     * @param essaideroute $essaideroute The essaideroute entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(essaideroute $essaideroute)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('essaideroute_delete', array('id' => $essaideroute->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
