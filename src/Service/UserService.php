<?php


namespace App\Service;


use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthAwareUserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;

class UserService implements OAuthAwareUserProviderInterface
{
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        var_dump($response);
        var_dump("loadUserByOAuthUserResponse");
        die();
    }
}
