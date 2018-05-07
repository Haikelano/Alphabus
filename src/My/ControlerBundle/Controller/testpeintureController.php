<?php

namespace My\ControlerBundle\Controller;

use My\ControlerBundle\Entity\testpeinture;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Testpeinture controller.
 *
 * @Route("testpeinture")
 */
class testpeintureController extends Controller
{
    /**
     * Lists all testpeinture entities.
     *
     * @Route("/", name="testpeinture_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $testpeintures = $em->getRepository('MyControlerBundle:testpeinture')->findAll();

        return $this->render('testpeinture/index.html.twig', array(
            'testpeintures' => $testpeintures,
        ));
    }

    /**
     * Creates a new testpeinture entity.
     *
     * @Route("/new", name="testpeinture_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $testpeinture = new Testpeinture();
        $form = $this->createForm('My\ControlerBundle\Form\testpeintureType', $testpeinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($testpeinture);
            $em->flush();

            return $this->redirectToRoute('testpeinture_show', array('id' => $testpeinture->getId()));
        }

        return $this->render('testpeinture/new.html.twig', array(
            'testpeinture' => $testpeinture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a testpeinture entity.
     *
     * @Route("/{id}", name="testpeinture_show")
     * @Method("GET")
     */
    public function showAction(testpeinture $testpeinture)
    {
        $deleteForm = $this->createDeleteForm($testpeinture);

        return $this->render('testpeinture/show.html.twig', array(
            'testpeinture' => $testpeinture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing testpeinture entity.
     *
     * @Route("/{id}/edit", name="testpeinture_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, testpeinture $testpeinture)
    {
        $deleteForm = $this->createDeleteForm($testpeinture);
        $editForm = $this->createForm('My\ControlerBundle\Form\testpeintureType', $testpeinture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('testpeinture_edit', array('id' => $testpeinture->getId()));
        }

        return $this->render('testpeinture/edit.html.twig', array(
            'testpeinture' => $testpeinture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a testpeinture entity.
     *
     * @Route("/{id}", name="testpeinture_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, testpeinture $testpeinture)
    {
        $form = $this->createDeleteForm($testpeinture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($testpeinture);
            $em->flush();
        }

        return $this->redirectToRoute('testpeinture_index');
    }

    /**
     * Creates a form to delete a testpeinture entity.
     *
     * @param testpeinture $testpeinture The testpeinture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(testpeinture $testpeinture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('testpeinture_delete', array('id' => $testpeinture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
