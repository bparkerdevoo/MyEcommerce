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
use Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator;
use Swift_SmtpTransport;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;


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

    /**
     * @param $user
     * @param \Swift_Mailer $mailer
     * @Route("/swiftMailer/{$user}", name="mailer" )
     */

    public function indexAction($user, \Swift_Mailer $mailer)
    {
        $user = $this->getUser();


        $transport = (new Swift_SmtpTransport('localhost', 25))
            ->setUsername('myscentfactory.admin@parkercommunication.pro
')
            ->setPassword('Ifocop2018')

            ->setHost('127.0.0.1')
            ->setPort(3306)
        ;

        $mailer = new Swift_Mailer($transport);


        $message = (new \Swift_Message('Hello Email'));

        $headers = $message->getHeaders();
        $headers->addTextHeader('Vous avez un message', 'MYSCENTFACTORY');
        $subject = $message->getHeaders()->get('Subject');
        $subject->setValue('Bienvenue')


            ->setSubject('Bienvenue')

            ->setFrom(['myscentfactory.admin@parkercommunication.pro' => 'MyScentFactory la team'])
            ->setTo('belema.parker@gmail.com')
            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/registration.html.twig',
                    array('name' => $user)
                ),
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message/
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;
        echo $subject->toString();

        echo $message->toString();


       $mailer->send($message);

        // or, you can also fetch the mailer service this way
        // $this->get('mailer')->send($message);

        //return $this->render(...);
    }

}
