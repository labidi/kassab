<?php

namespace App\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{




    public function addFavoriteAction($author_id)
    {
        $admin = $this->get('security.context')->getToken()->getUser();

        if(!$admin->hasRole("ROLE_ADMIN"))
            return new JsonResponse(array( 'message' =>  "Accés non autorisé !" ),403 );
        
        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository('AppUserBundle:Author')->find($author_id);

        if (!$author)
            return new JsonResponse(array( 'message' =>  "Auteur non trouvé" ),403 );

        if($admin->getFavorites()->contains($author))
            return new JsonResponse(array( 'message' =>  "L'auteur ".$author." est déja dans vos favoris" ),403 );

        $admin->addFavorite($author) ;

        $em->persist($admin) ;
        $em->flush() ;

        return new JsonResponse(array( 'message' =>  "L'auteur ".$author." a été ajouté a vos favoris" ),200 );

    }


    public function disableAuhtorAction($author_id)
    {
        $admin = $this->get('security.context')->getToken()->getUser();

        if(!$admin->hasRole("ROLE_ADMIN"))
            return new JsonResponse(array( 'message' =>  "Accés non autorisé !" ),403 );
        
        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository('AppUserBundle:Author')->find($author_id);

        if (!$author)
            return new JsonResponse(array( 'message' =>  "Auteur non trouvé" ),403 );

        $author->setIsConfirmed(false) ;

        $em->persist($author) ;
        $em->flush() ;

        return new JsonResponse(array( 'message' =>  "Le compte de redacteur ".$author." a été non confirmé" ),200 );

    }

	public function enableAuhtorAction($author_id)
	{
	 	$admin = $this->get('security.context')->getToken()->getUser();

        if(!$admin->hasRole("ROLE_ADMIN"))
        	return new JsonResponse(array( 'message' =>  "Accés non autorisé !" ),403 );
        
        $em = $this->getDoctrine()->getManager();

        $author = $em->getRepository('AppUserBundle:Author')->find($author_id);

        if (!$author)
        	return new JsonResponse(array( 'message' =>  "Auteur non trouvé" ),403 );


        $author->setIsConfirmed(true) ;

        $em->persist($author) ;
        $em->flush() ;

        return new JsonResponse(array( 'message' =>  "Le compte de redacteur ".$author." a été confirmé" ),200 );

    }
}
