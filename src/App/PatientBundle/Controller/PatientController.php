<?php

namespace App\PatientBundle\Controller;

use App\PatientBundle\Entity\Examen;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;


use App\PatientBundle\Entity\Patient;
use App\PatientBundle\Form\PatientType;

/**
 * Patient controller.
 *
 */
class PatientController extends Controller
{

    /**
     * Lists all Patient entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppPatientBundle:Patient')->findAll();

        return $this->render('AppPatientBundle:Patient:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Patient entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Patient();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('app_patient_show', array('id' => $entity->getId())));
        }

        return $this->render('AppPatientBundle:Patient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Patient entity.
     *
     * @param Patient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Patient $entity)
    {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('app_patient_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Patient entity.
     *
     */
    public function newAction()
    {
        $entity = new Patient();
        $examen = new Examen() ;
        $entity->addExamen($examen) ;
        $form   = $this->createCreateForm($entity);


        return $this->render('AppPatientBundle:Patient:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Patient entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppPatientBundle:Patient:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'allow_delete' => true,
        ));
    }

    /**
     * Displays a form to edit an existing Patient entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppPatientBundle:Patient:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Patient entity.
    *
    * @param Patient $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Patient $entity)
    {
        $form = $this->createForm(new PatientType(), $entity, array(
            'action' => $this->generateUrl('app_patient_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Patient entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppPatientBundle:Patient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Patient entity.');
        }

        $exams = new ArrayCollection() ;
        foreach($entity->getExamens() as $exam){
            $exams->add($exam) ;
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            foreach ($exams as $exam) {
                if (false === $entity->getExamens()->contains($exam)) {
                    $entity->removeExamen($exam) ;
                    $em->remove($exam);
                }
            }

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('app_patient_index'));
        }

        dump($this->getErrorMessages($editForm)) ;

        return $this->render('AppPatientBundle:Patient:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    private function getErrorMessages(\Symfony\Component\Form\Form $form) {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            if ($form->isRoot()) {
                $errors['#'][] = $error->getMessage();
            } else {
                $errors[] = $error->getMessage();
            }
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }
    /**
     * Deletes a Patient entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppPatientBundle:Patient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Patient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('app_patient_index'));
    }

    /**
     * Creates a form to delete a Patient entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_patient_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
