<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\basdecaisse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Basdecaisse controller.
 *
 * @Route("basdecaisse")
 */
class basdecaisseController extends Controller
{
    /**
     * Lists all basdecaisse entities.
     *
     * @Route("/", name="basdecaisse_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $basdecaisses = $em->getRepository('MyControlerBundle:basdecaisse')->findAll();

        return $this->render('basdecaisse/index.html.twig', array(
            'basdecaisses' => $basdecaisses,
        ));
    }

    /**
     * Creates a new basdecaisse entity.
     *
     * @Route("/new", name="basdecaisse_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $basdecaisse = new Basdecaisse();
        $form = $this->createForm('My\ControlerBundle\Form\basdecaisseType', $basdecaisse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($basdecaisse);
            $em->flush();

            return $this->redirectToRoute('basdecaisse_show', array('id' => $basdecaisse->getId()));
        }

        return $this->render('basdecaisse/new.html.twig', array(
            'basdecaisse' => $basdecaisse,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a basdecaisse entity.
     *
     * @Route("/{id}", name="basdecaisse_show")
     * @Method("GET")
     */
    public function showAction(basdecaisse $basdecaisse)
    {
        $deleteForm = $this->createDeleteForm($basdecaisse);

        $em = $this->getDoctrine()->getManager();
        $id_chassis=$basdecaisse->getChassis();

        $client = $em->getRepository('MyAlphabusBundle:Affectation')->findBy(array('chassis' => $id_chassis));


        return $this->render('basdecaisse/show.html.twig', array(
            'client' => $client,
            'basdecaisse' => $basdecaisse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing basdecaisse entity.
     *
     * @Route("/{id}/edit", name="basdecaisse_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, basdecaisse $basdecaisse)
    {
        $deleteForm = $this->createDeleteForm($basdecaisse);
        $editForm = $this->createForm('My\ControlerBundle\Form\basdecaisseType', $basdecaisse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('basdecaisse_edit', array('id' => $basdecaisse->getId()));
        }

        return $this->render('basdecaisse/edit.html.twig', array(
            'basdecaisse' => $basdecaisse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a basdecaisse entity.
     *
     * @Route("/{id}", name="basdecaisse_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, basdecaisse $basdecaisse)
    {
        $form = $this->createDeleteForm($basdecaisse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($basdecaisse);
            $em->flush();
        }

        return $this->redirectToRoute('basdecaisse_index');
    }

    /**
     * Creates a form to delete a basdecaisse entity.
     *
     * @param basdecaisse $basdecaisse The basdecaisse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(basdecaisse $basdecaisse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('basdecaisse_delete', array('id' => $basdecaisse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
