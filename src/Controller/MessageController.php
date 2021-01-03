<?php

namespace App\Controller;

use App\Entity\Ticket;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageController extends AbstractController
{
    /**
     * @Route("/my/messages", name="show_user_messages")
     */
    public function showUserMessages(UserInterface $user): Response
    {
        $userID = $user->getId();
        $em = $this->getDoctrine()->getRepository(Ticket::class);
        $tickets = $em->findMessageByUserId($userID);
        
        return $this->render('message/index.html.twig', [
            'controller_name' => 'MessageController',
            'tickets' => $tickets
        ]);
    }
}
