<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request;

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'My\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // admin_page
        if ('/admi' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'admin_page');
            }

            return array (  '_controller' => 'My\\UserBundle\\Controller\\DefaultController::adminPageAction',  '_route' => 'admin_page',);
        }

        // user_check
        if ('' === rtrim($pathinfo, '/')) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'user_check');
            }

            return array (  '_controller' => 'My\\UserBundle\\Controller\\DefaultController::showUserAction',  '_route' => 'user_check',);
        }

        if (0 === strpos($pathinfo, '/affectation')) {
            // affectation_index
            if ('/affectation' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_affectation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'affectation_index');
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\AffectationController::indexAction',  '_route' => 'affectation_index',);
            }
            not_affectation_index:

            // affectation_new
            if ('/affectation/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_affectation_new;
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\AffectationController::newAction',  '_route' => 'affectation_new',);
            }
            not_affectation_new:

            // affectation_edit
            if (preg_match('#^/affectation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_affectation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_edit')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\AffectationController::editAction',));
            }
            not_affectation_edit:

            // affectation_delete
            if (preg_match('#^/affectation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_affectation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_delete')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\AffectationController::deleteAction',));
            }
            not_affectation_delete:

            // affectation_show
            if (preg_match('#^/affectation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_affectation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affectation_show')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\AffectationController::showAction',));
            }
            not_affectation_show:

        }

        // edit_chassis
        if (0 === strpos($pathinfo, '/editchassis') && preg_match('#^/editchassis(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_chassis')), array (  'id' => NULL,  '_controller' => 'My\\AlphabusBundle\\Controller\\ChassisController::editenseignantAction',));
        }

        // new_chassis
        if ('/addchassis' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ChassisController::editenseignantAction',  '_route' => 'new_chassis',);
        }

        // list_chassis
        if ('/listchassis' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ChassisController::listchassisAction',  '_route' => 'list_chassis',);
        }

        // del_chassis
        if ('/delchassis' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ChassisController::delchassisAction',  '_route' => 'del_chassis',);
        }

        // cherchassis
        if ('/cherchassis' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_cherchassis;
            }

            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ChassisController::cherchassisAction',  '_route' => 'cherchassis',);
        }
        not_cherchassis:

        // my_alphabus_default_index
        if ('/index' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_alphabus_default_index',);
        }

        if (0 === strpos($pathinfo, '/post')) {
            // post_index
            if ('/post' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'post_index');
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PostController::indexAction',  '_route' => 'post_index',);
            }
            not_post_index:

            // post_new
            if ('/post/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PostController::showAction',));
            }
            not_post_show:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PostController::editAction',));
            }
            not_post_edit:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PostController::deleteAction',));
            }
            not_post_delete:

        }

        if (0 === strpos($pathinfo, '/receptionchassis')) {
            // receptionchassis_index
            if ('/receptionchassis' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_receptionchassis_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'receptionchassis_index');
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ReceptionchassisController::indexAction',  '_route' => 'receptionchassis_index',);
            }
            not_receptionchassis_index:

            // receptionchassis_new
            if ('/receptionchassis/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_receptionchassis_new;
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ReceptionchassisController::newAction',  '_route' => 'receptionchassis_new',);
            }
            not_receptionchassis_new:

            // receptionchassis_show
            if (preg_match('#^/receptionchassis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_receptionchassis_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receptionchassis_show')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ReceptionchassisController::showAction',));
            }
            not_receptionchassis_show:

            // receptionchassis_edit
            if (preg_match('#^/receptionchassis/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_receptionchassis_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receptionchassis_edit')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ReceptionchassisController::editAction',));
            }
            not_receptionchassis_edit:

            // receptionchassis_delete
            if (preg_match('#^/receptionchassis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_receptionchassis_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'receptionchassis_delete')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ReceptionchassisController::deleteAction',));
            }
            not_receptionchassis_delete:

        }

        if (0 === strpos($pathinfo, '/structure')) {
            // structure_index
            if ('/structure' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_structure_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'structure_index');
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\StructureController::indexAction',  '_route' => 'structure_index',);
            }
            not_structure_index:

            // structure_new
            if ('/structure/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_structure_new;
                }

                return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\StructureController::newAction',  '_route' => 'structure_new',);
            }
            not_structure_new:

            // structure_show
            if (preg_match('#^/structure/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_structure_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_show')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\StructureController::showAction',));
            }
            not_structure_show:

            // structure_edit
            if (preg_match('#^/structure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_structure_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_edit')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\StructureController::editAction',));
            }
            not_structure_edit:

            // structure_delete
            if (preg_match('#^/structure/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_structure_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'structure_delete')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\StructureController::deleteAction',));
            }
            not_structure_delete:

        }

        // my_alphabus_user_index
        if ('/index_user' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\UserController::indexAction',  '_route' => 'my_alphabus_user_index',);
        }

        // my_alphabus_user_rech
        if ('/rech' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\UserController::rechAction',  '_route' => 'my_alphabus_user_rech',);
        }

        // console
        if ('/_console' === $pathinfo) {
            return array('_route' => 'console');
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if ('/admin' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if ('/admin' === rtrim($pathinfo, '/')) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        // fos_user_change_password
        if ('/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
