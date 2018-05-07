<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\equipementoptionel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Equipementoptionel controller.
 *
 * @Route("equipementoptionel")
 */
class equipementoptionelController extends Controller
{
    /**
     * Lists all equipementoptionel entities.
     *
     * @Route("/", name="equipementoptionel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $equipementoptionels = $em->getRepository('MyControlerBundle:equipementoptionel')->findAll();

        return $this->render('equipementoptionel/index.html.twig', array(
            'equipementoptionels' => $equipementoptionels,
        ));
    }

    /**
     * Creates a new equipementoptionel entity.
     *
     * @Route("/new", name="equipementoptionel_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $equipementoptionel = new Equipementoptionel();
        $form = $this->createForm('My\ControlerBundle\Form\equipementoptionelType', $equipementoptionel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipementoptionel);
            $em->flush();

            return $this->redirectToRoute('equipementoptionel_show', array('id' => $equipementoptionel->getId()));
        }

        return $this->render('equipementoptionel/new.html.twig', array(
            'equipementoptionel' => $equipementoptionel,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a equipementoptionel entity.
     *
     * @Route("/{id}", name="equipementoptionel_show")
     * @Method("GET")
     */
    public function showAction(equipementoptionel $equipementoptionel)
    {
        $deleteForm = $this->createDeleteForm($equipementoptionel);

        return $this->render('equipementoptionel/show.html.twig', array(
            'equipementoptionel' => $equipementoptionel,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing equipementoptionel entity.
     *
     * @Route("/{id}/edit", name="equipementoptionel_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, equipementoptionel $equipementoptionel)
    {
        $deleteForm = $this->createDeleteForm($equipementoptionel);
        $editForm = $this->createForm('My\ControlerBundle\Form\equipementoptionelType', $equipementoptionel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('equipementoptionel_edit', array('id' => $equipementoptionel->getId()));
        }

        return $this->render('equipementoptionel/edit.html.twig', array(
            'equipementoptionel' => $equipementoptionel,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a equipementoptionel entity.
     *
     * @Route("/{id}", name="equipementoptionel_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, equipementoptionel $equipementoptionel)
    {
        $form = $this->createDeleteForm($equipementoptionel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($equipementoptionel);
            $em->flush();
        }

        return $this->redirectToRoute('equipementoptionel_index');
    }

    /**
     * Creates a form to delete a equipementoptionel entity.
     *
     * @param equipementoptionel $equipementoptionel The equipementoptionel entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(equipementoptionel $equipementoptionel)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipementoptionel_delete', array('id' => $equipementoptionel->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
