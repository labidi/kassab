<?php

namespace App\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FragmentController extends Controller
{
    public function AuthorListAction()
    {
    	$em = $this->getDoctrine()->getManager() ;

   		$authors  = $em->getRepository('AppUserBundle:Author')->findAllConfirmedAuhtors() ;

        // $data = [] ;
        // foreach($authors as $author)
        // {
        //     $articles = 0 ;
        //     foreach ($author->getOrders() as $order) {
        //         foreach ($order->getArticles() as $article) {
        //             if($article->getStatus() == 0)
        //                 $articles++ ;
        //         }
        //     }
        //     $data[] = [$author,$articles] ;
        // }

        return $this->render('AppUserBundle:Fragment:list.html.twig', array(
        		'authors'=>$authors
        ));    
    }

 //    public function recentPendingArticlesAction($max = 5)
	// {
	// 	$user = $this->get('security.context')->getToken()->getUser(); 
	// 	$em = $this->getDoctrine()->getManager();

	// 	$articles = $em->getRepository('AppOrderBundle:Article')->findPendingArticles($user);
		
	// 	return $this->render('AppOrderBundle:Fragment:recent_pending_articles.html.twig', array(
 //            'articles' => $articles,
 //            'max' => $max
 //        ));
	// } 

}
