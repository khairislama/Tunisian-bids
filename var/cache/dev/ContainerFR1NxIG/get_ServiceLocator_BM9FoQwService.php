<?php

namespace ContainerFR1NxIG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BM9FoQwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bM9FoQw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bM9FoQw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
            'authenticator' => ['privates', 'App\\Security\\LoginAuthentificatorAuthenticator', 'getLoginAuthentificatorAuthenticatorService', true],
            'guardHandler' => ['privates', 'security.authentication.guard_handler', 'getSecurity_Authentication_GuardHandlerService', true],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'authChecker' => '?',
            'authenticator' => 'App\\Security\\LoginAuthentificatorAuthenticator',
            'guardHandler' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}