<?php

namespace App\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\UserBundle\Entity\User;
use App\UserBundle\Form\UserType;

use App\UserBundle\Form\SearchType;


/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Lists all User entities.
     *
     */
    public function indexAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
       
        $em = $this->getDoctrine()->getManager(); 


        $searchFormData = is_null($request->query->get('search_form'))?array():$request->query->get('search_form'); 
        unset($searchFormData["submit"]);

        $searchForm = $this->createSearchForm($searchFormData) ;
        $searchForm->handleRequest($request);
        
        $users = $em->getRepository('AppUserBundle:User')->findUsers($searchFormData) ;

        return $this->render('AppUserBundle:User:index.html.twig', array(
            'entities' => $users,
            'title'=> "Liste des utilisateurs",
            'search_form'=>$searchForm->createView()
        ));
    }    


    private function createSearchForm($data)
    {   
        $form = $this->createForm(new SearchType(), null, array(
            'action' => $this->generateUrl('app_user_index'),
            'method' => 'GET',
        ));
        $form->setData($data) ;
        $form->add('submit', 'submit', array('label' => 'actions.search'));
        $form->add('roles', 'choice', array(
            'choices' => $this->getExistingRoles(),
            'label' => 'Roles',
            'multiple' => true,
            'mapped' => true,
        ));
        return $form;
    }


    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {


            $userManager = $this->get('fos_user.user_manager');
            $user->setEnabled(true) ;
            $userManager->updateUser($user);

            return $this->redirect($this->generateUrl('app_user_index'));
        }

        return $this->render('AppUserBundle:User:new.html.twig', array(
            'entity' => $user,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('app_user_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        $form->add('roles', 'choice', array(
            'choices' => $this->getExistingRoles(),
            'data' => $entity->getRoles(),
            'label' => 'Roles',
            'multiple' => true,
            'mapped' => true,
        ));

        return $form;
    }

    public function getExistingRoles()
    {
        $roleHierarchy = $this->container->getParameter('security.role_hierarchy.roles');
        $roles = array_keys($roleHierarchy);

        foreach ($roles as $role) {
            $theRoles[$role] = $role;
        }

        unset($theRoles['ROLE_USER']) ;
        return $theRoles;
    }

    /**
     * Displays a form to create a new Author entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppUserBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Author entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }           

        return $this->render('AppUserBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'stats'       => $stats
        ));
    }




    /**
     * Displays a form to edit an existing Author entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editPasswordForm = $this->createEditPasswordForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'edit_password_form'   => $editPasswordForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('app_user_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));
        $form->remove('plainPassword') ;

        $form->add('roles', 'choice', array(
            'choices' => $this->getExistingRoles(),
            'data' => $entity->getRoles(),
            'label' => 'Roles',
            'multiple' => true,
            'mapped' => true,
        ));

        return $form;
    } 


    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditPasswordForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('app_user_update_password', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        
        $form->add('submit', 'submit', array('label' => 'Update'));
        $form->remove('first_name') ;
        $form->remove('last_name') ;
        $form->remove('email') ;

        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('app_user_index', array('id' => $id)));
        }

        $editPasswordForm = $this->createEditPasswordForm($entity);

        return $this->render('AppUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'edit_password_form'   => $editPasswordForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updatePasswordAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppUserBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editPasswordForm = $this->createEditPasswordForm($entity);
        $editPasswordForm->handleRequest($request);

        if ($editPasswordForm->isValid()) {

            $userManager = $this->get('fos_user.user_manager');

            $userManager->updateUser($entity);

            return $this->redirect($this->generateUrl('app_user_index', array('id' => $id)));
        }


        $editForm = $this->createEditForm($entity);
        return $this->render('AppUserBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'edit_password_form'   => $editPasswordForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppUserBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('app_author_index'));
    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('app_user_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
