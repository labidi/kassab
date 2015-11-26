<?php

namespace App\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Translation\TranslatorInterface;

class UserListener implements EventSubscriberInterface
{
    private $session;
    private $doctrine;

    public function __construct(Session $session,  $doctrine)
    {
        $this->session = $session;
        $this->doctrine = $doctrine;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_COMPLETED => 'onRegistrationCompleted',
            // FOSUserEvents::REGISTRATION_INITIALIZE => 'onRegistrationCompleted'
        );
    }

    public function onRegistrationCompleted(Event $event)
    {
        $author = $event->getUser() ;
        $em = $this->doctrine->getManager();
        $tests = $em->getRepository('AppOrderBundle:BaseOrder')->findAvailableTests();
        if(count($tests) > 0)
        {
            $test = $tests[0] ;
            $test->setAuthor($author)  ;
            $em->persist($test) ;
            $em->flush() ;
        }
        
    }

}
