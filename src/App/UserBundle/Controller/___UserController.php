<?php

namespace App\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use App\UserBundle\Entity\User;
use App\UserBundle\Entity\Author;
use App\UserBundle\Form\Type\RegistrationFormType ;
use App\UserBundle\Form\AuthorType ;
// use InternetFactory\UserBundle\Event\UserCreatedEvent;
// use InternetFactory\UserBundle\Form\Type\ChangePasswordFormType ;


use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Util\TokenGenerator ;
use FOS\UserBundle\Event\FilterUserResponseEvent;


class UserController extends Controller
{
    public function profileAction()
    {
    	$user = $this->get('security.context')->getToken()->getUser();

    	$form = $this->createEditForm($user) ;
        $changePassword = $this->createEditPasswordForm($user) ;

        return $this->render('AppUserBundle:User:profile.html.twig',array(
            'form'=> $form->createView(),
            'change_password'=> $changePassword->createView(),
            'change_password_submit_url'=>$this->generateUrl('app_user_password_update'),
            'user'=> $user
        ));
    }

    private function createEditPasswordForm($user)
    {
        $formFactory = $this->get('fos_user.change_password.form.factory');
        $changePassword = $formFactory->createForm();
        $changePassword->setData($user);
        return $changePassword;
    }

    private function createEditForm($entity)
    {
    	$formInstance = null ;
    	if ($entity->hasRole('ROLE_ADMIN')) {
    		$formInstance = new RegistrationFormType() ;
     	}else {
    		$formInstance = new AuthorType() ;
     	}
        $currentuser = $this->get('security.context')->getToken()->getUser(); 
        $form = $this->createForm(new $formInstance(), $entity, array(
            'action' => $this->generateUrl('app_user_profile_update'),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));
        $form->remove('plainPassword');
        $form->remove('agencyName');
        $form->remove('expiresAt');

        return $form;
    }

    public function updateAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createEditForm($user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($user);
            $em->flush() ;
            return $this->redirect($this->generateUrl('app_dashboard_index'));
        }
        var_dump($form->getErrors());
        die('ss') ;
    }

    public function passwordUpdateAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $dispatcher = $this->get('event_dispatcher');

        $formFactory = $this->get('fos_user.change_password.form.factory');

        $changePassword = $this->createEditPasswordForm($user) ;

        $changePassword->handleRequest($request);


        if ($changePassword->isValid()) {
            /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
            $userManager = $this->get('fos_user.user_manager');

            $event = new FormEvent($changePassword, $request);
            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_SUCCESS, $event);

            $userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('internet_factory_user_profile');
                $response = new RedirectResponse($url);
            }

            $dispatcher->dispatch(FOSUserEvents::CHANGE_PASSWORD_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        $form = $this->createEditForm($user) ;



        return $this->render('AppUserBundle:User:profile.html.twig',array(
            'form'=> $form->createView(),
            'change_password'=> $changePassword->createView(),
            'change_password_submit_url'=>$this->generateUrl('app_user_password_update'),
            'user'=> $user
        ));
    }



}
