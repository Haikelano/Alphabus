<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\Accesoirexterieur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Accesoirexterieur controller.
 *
 * @Route("accesoirexterieur")
 */
class AccesoirexterieurController extends Controller
{
    /**
     * Lists all accesoirexterieur entities.
     *
     * @Route("/", name="accesoirexterieur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accesoirexterieurs = $em->getRepository('MyControlerBundle:Accesoirexterieur')->findAll();

        return $this->render('accesoirexterieur/index.html.twig', array(
            'accesoirexterieurs' => $accesoirexterieurs,
        ));
    }

    /**
     * Creates a new accesoirexterieur entity.
     *
     * @Route("/new", name="accesoirexterieur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $accesoirexterieur = new Accesoirexterieur();
        $form = $this->createForm('My\ControlerBundle\Form\AccesoirexterieurType', $accesoirexterieur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accesoirexterieur);
            $em->flush();

            return $this->redirectToRoute('accesoirexterieur_show', array('id' => $accesoirexterieur->getId()));
        }

        return $this->render('accesoirexterieur/new.html.twig', array(
            'accesoirexterieur' => $accesoirexterieur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a accesoirexterieur entity.
     *
     * @Route("/{id}", name="accesoirexterieur_show")
     * @Method("GET")
     */
    public function showAction(Accesoirexterieur $accesoirexterieur)
    {
        $deleteForm = $this->createDeleteForm($accesoirexterieur);

        return $this->render('accesoirexterieur/show.html.twig', array(
            'accesoirexterieur' => $accesoirexterieur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing accesoirexterieur entity.
     *
     * @Route("/{id}/edit", name="accesoirexterieur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Accesoirexterieur $accesoirexterieur)
    {
        $deleteForm = $this->createDeleteForm($accesoirexterieur);
        $editForm = $this->createForm('My\ControlerBundle\Form\AccesoirexterieurType', $accesoirexterieur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accesoirexterieur_edit', array('id' => $accesoirexterieur->getId()));
        }

        return $this->render('accesoirexterieur/edit.html.twig', array(
            'accesoirexterieur' => $accesoirexterieur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a accesoirexterieur entity.
     *
     * @Route("/{id}", name="accesoirexterieur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Accesoirexterieur $accesoirexterieur)
    {
        $form = $this->createDeleteForm($accesoirexterieur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($accesoirexterieur);
            $em->flush();
        }

        return $this->redirectToRoute('accesoirexterieur_index');
    }

    /**
     * Creates a form to delete a accesoirexterieur entity.
     *
     * @param Accesoirexterieur $accesoirexterieur The accesoirexterieur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Accesoirexterieur $accesoirexterieur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accesoirexterieur_delete', array('id' => $accesoirexterieur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
