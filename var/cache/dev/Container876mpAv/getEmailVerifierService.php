<?php

namespace Container876mpAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmailVerifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Security\EmailVerifier' shared autowired service.
     *
     * @return \App\Security\EmailVerifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'EmailVerifier.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'UriSignerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'VerifyEmailTokenGenerator.php';

        return $container->privates['App\\Security\\EmailVerifier'] = new \App\Security\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? $container->getRouterService()), (new \SymfonyCasts\Bundle\VerifyEmail\Factory\UriSignerFactory($container->getEnv('APP_SECRET'), 'signature'))->createUriSigner(), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
