<?php

namespace Container876mpAv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QQzfbaGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QQzfbaG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QQzfbaG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminAccountController::edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\AdminDashboardController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminParameterController::edit' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\AdminUserController::add' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminUserController::delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\AdminUserController::edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminUserController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminUserController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\RegistrationController1::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\RegistrationController1::verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\RegistrationController::verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::resetPassword' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController1::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminAccountController:edit' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\AdminDashboardController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminParameterController:edit' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\AdminUserController:add' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminUserController:delete' => ['privates', '.service_locator.GPGtF8v', 'get_ServiceLocator_GPGtF8vService', true],
            'App\\Controller\\AdminUserController:edit' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminUserController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminUserController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\RegistrationController1:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\RegistrationController1:verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iQAD6w2', 'get_ServiceLocator_IQAD6w2Service', true],
            'App\\Controller\\RegistrationController:verifyUserEmail' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:resetPassword' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController1:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminAccountController::edit' => '?',
            'App\\Controller\\AdminDashboardController::index' => '?',
            'App\\Controller\\AdminParameterController::edit' => '?',
            'App\\Controller\\AdminUserController::add' => '?',
            'App\\Controller\\AdminUserController::delete' => '?',
            'App\\Controller\\AdminUserController::edit' => '?',
            'App\\Controller\\AdminUserController::index' => '?',
            'App\\Controller\\AdminUserController::show' => '?',
            'App\\Controller\\RegistrationController1::register' => '?',
            'App\\Controller\\RegistrationController1::verifyUserEmail' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::resetPassword' => '?',
            'App\\Controller\\SecurityController1::login' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminAccountController:edit' => '?',
            'App\\Controller\\AdminDashboardController:index' => '?',
            'App\\Controller\\AdminParameterController:edit' => '?',
            'App\\Controller\\AdminUserController:add' => '?',
            'App\\Controller\\AdminUserController:delete' => '?',
            'App\\Controller\\AdminUserController:edit' => '?',
            'App\\Controller\\AdminUserController:index' => '?',
            'App\\Controller\\AdminUserController:show' => '?',
            'App\\Controller\\RegistrationController1:register' => '?',
            'App\\Controller\\RegistrationController1:verifyUserEmail' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmail' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:resetPassword' => '?',
            'App\\Controller\\SecurityController1:login' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
