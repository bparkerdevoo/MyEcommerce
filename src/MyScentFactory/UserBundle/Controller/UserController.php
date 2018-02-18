<?php

namespace MyScentFactory\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use MyScentFactory\UserBundle\Entity\Client;

class UserController extends Controller
{
    /**
     *
     * @Route("/session", name="login_client")
     */
    public function accesAction()
    {
        $client =new Client();
        $user = $this->getUser();

        $client->getIdUser();



        var_dump($client);
        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'user' => $user,
            'client' => $client
        ));
    }
}
