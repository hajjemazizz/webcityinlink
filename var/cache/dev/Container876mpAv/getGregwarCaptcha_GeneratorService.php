<?php

namespace Container876mpAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_GeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gregwar_captcha.generator' shared service.
     *
     * @return \Gregwar\CaptchaBundle\Generator\CaptchaGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha-bundle'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'CaptchaGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'CaptchaBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'CaptchaBuilder.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'PhraseBuilderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'gregwar'.\DIRECTORY_SEPARATOR.'captcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Gregwar'.\DIRECTORY_SEPARATOR.'Captcha'.\DIRECTORY_SEPARATOR.'PhraseBuilder.php';

        return $container->services['gregwar_captcha.generator'] = new \Gregwar\CaptchaBundle\Generator\CaptchaGenerator(($container->services['router'] ?? $container->getRouterService()), ($container->services['gregwar_captcha.captcha_builder'] ?? ($container->services['gregwar_captcha.captcha_builder'] = new \Gregwar\Captcha\CaptchaBuilder())), ($container->services['gregwar_captcha.phrase_builder'] ?? ($container->services['gregwar_captcha.phrase_builder'] = new \Gregwar\Captcha\PhraseBuilder())), ($container->services['gregwar_captcha.image_file_handler'] ?? $container->load('getGregwarCaptcha_ImageFileHandlerService')));
    }
}
