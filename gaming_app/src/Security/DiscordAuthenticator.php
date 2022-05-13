<?php
namespace App\Security;

use App\Repository\UserRepository;
use App\Entity\User; // your user entity
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;
use KnpU\OAuth2ClientBundle\Client\Provider\FacebookClient;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use KnpU\OAuth2ClientBundle\Security\Authenticator\SocialAuthenticator;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class DiscordAuthenticator extends SocialAuthenticator
{
    private $clientRegistry;
    private $em;
    private $router;
    private $userR;

    public function __construct(ClientRegistry $clientRegistry, EntityManagerInterface $em, RouterInterface $router,UserRepository $userR)
    {
        $this->clientRegistry = $clientRegistry;
        $this->em = $em;
        $this->router = $router;
        $this->userR= $userR;
    }

    public function supports(Request $request)
    {
        // continue ONLY if the current ROUTE matches the check ROUTE
        return $request->attributes->get('_route') === 'connect_discord_check';
    }

    public function getCredentials(Request $request)
    {
        // this method is only called if supports() returns true

        return $this->fetchAccessToken($this->getDiscordClient());
    }
    /**
    * @param AccesToken $credentials
    */
    public function getUser($credentials, UserProviderInterface $userProvider )
    {
        
        $googleUser = $this->getDiscordClient()
            ->fetchUserFromToken($credentials);
            return $this->userR->findOrCreateDiscordUser($googleUser); 
    }

    
    private function getDiscordClient()
    {
        return $this->clientRegistry
            ->getClient('discord');
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // change "app_homepage" to some route in your app

      $user = $token->getUser();
      $user->setLastLogin(new \DateTime());
      $this->em->persist($user);
      $this->em->flush();
            $email=$user->getEmail();

 $liste= $this->em->getRepository(User::class)->getuserbyemail($email);
  $roles=$liste[0]['roles'];
       foreach ($roles as $key => $value) {
           if ($value=="ROLE_ADMIN" || $value=="ROLE_EDITOR"){
        $targetUrl = $this->router->generate('dashboard');
           }
           else{
                 $targetUrl = $this->router->generate('home');
           }
        }
        return new RedirectResponse($targetUrl);
    
        // or, on success, let the request continue to be handled by the controller
        //return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new Response($message, Response::HTTP_FORBIDDEN);
    }

    /**
     * Called when authentication is needed, but it's not sent.
     * This redirects to the 'login'.
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        return new RedirectResponse(
            '/connect/', // might be the site, where users choose their oauth provider
            Response::HTTP_TEMPORARY_REDIRECT
        );
    }

    // ...
}