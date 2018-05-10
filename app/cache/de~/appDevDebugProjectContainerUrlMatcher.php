<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/accesoirexterieur')) {
            // accesoirexterieur_index
            if ('/accesoirexterieur' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_accesoirexterieur_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'accesoirexterieur_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\AccesoirexterieurController::indexAction',  '_route' => 'accesoirexterieur_index',);
            }
            not_accesoirexterieur_index:

            // accesoirexterieur_new
            if ('/accesoirexterieur/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_accesoirexterieur_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\AccesoirexterieurController::newAction',  '_route' => 'accesoirexterieur_new',);
            }
            not_accesoirexterieur_new:

            // accesoirexterieur_show
            if (preg_match('#^/accesoirexterieur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_accesoirexterieur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accesoirexterieur_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\AccesoirexterieurController::showAction',));
            }
            not_accesoirexterieur_show:

            // accesoirexterieur_edit
            if (preg_match('#^/accesoirexterieur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_accesoirexterieur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accesoirexterieur_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\AccesoirexterieurController::editAction',));
            }
            not_accesoirexterieur_edit:

            // accesoirexterieur_delete
            if (preg_match('#^/accesoirexterieur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_accesoirexterieur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accesoirexterieur_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\AccesoirexterieurController::deleteAction',));
            }
            not_accesoirexterieur_delete:

        }

        // carrosserie
        if ('/carosserie' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_carrosserie;
            }

            return array (  '_controller' => 'My\\ControlerBundle\\Controller\\ServiceCarroserieController::indexAction',  '_route' => 'carrosserie',);
        }
        not_carrosserie:

        // my_controler_servicecarroserie_new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'My\\ControlerBundle\\Controller\\ServiceCarroserieController::newAction',  '_route' => 'my_controler_servicecarroserie_new',);
        }

        if (0 === strpos($pathinfo, '/accessoiresinterier')) {
            // accessoiresinterier_index
            if ('/accessoiresinterier' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_accessoiresinterier_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'accessoiresinterier_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\accessoiresinterierController::indexAction',  '_route' => 'accessoiresinterier_index',);
            }
            not_accessoiresinterier_index:

            // accessoiresinterier_new
            if ('/accessoiresinterier/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_accessoiresinterier_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\accessoiresinterierController::newAction',  '_route' => 'accessoiresinterier_new',);
            }
            not_accessoiresinterier_new:

            // accessoiresinterier_show
            if (preg_match('#^/accessoiresinterier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_accessoiresinterier_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accessoiresinterier_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\accessoiresinterierController::showAction',));
            }
            not_accessoiresinterier_show:

            // accessoiresinterier_edit
            if (preg_match('#^/accessoiresinterier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_accessoiresinterier_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accessoiresinterier_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\accessoiresinterierController::editAction',));
            }
            not_accessoiresinterier_edit:

            // accessoiresinterier_delete
            if (preg_match('#^/accessoiresinterier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_accessoiresinterier_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'accessoiresinterier_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\accessoiresinterierController::deleteAction',));
            }
            not_accessoiresinterier_delete:

        }

        if (0 === strpos($pathinfo, '/basdecaisse')) {
            // basdecaisse_index
            if ('/basdecaisse' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_basdecaisse_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'basdecaisse_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\basdecaisseController::indexAction',  '_route' => 'basdecaisse_index',);
            }
            not_basdecaisse_index:

            // basdecaisse_new
            if ('/basdecaisse/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_basdecaisse_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\basdecaisseController::newAction',  '_route' => 'basdecaisse_new',);
            }
            not_basdecaisse_new:

            // basdecaisse_show
            if (preg_match('#^/basdecaisse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_basdecaisse_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'basdecaisse_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\basdecaisseController::showAction',));
            }
            not_basdecaisse_show:

            // basdecaisse_edit
            if (preg_match('#^/basdecaisse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_basdecaisse_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'basdecaisse_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\basdecaisseController::editAction',));
            }
            not_basdecaisse_edit:

            // basdecaisse_delete
            if (preg_match('#^/basdecaisse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_basdecaisse_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'basdecaisse_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\basdecaisseController::deleteAction',));
            }
            not_basdecaisse_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/centralebatteries')) {
                // centralebatteries_index
                if ('/centralebatteries' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centralebatteries_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'centralebatteries_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\centralebatteriesController::indexAction',  '_route' => 'centralebatteries_index',);
                }
                not_centralebatteries_index:

                // centralebatteries_new
                if ('/centralebatteries/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_centralebatteries_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\centralebatteriesController::newAction',  '_route' => 'centralebatteries_new',);
                }
                not_centralebatteries_new:

                // centralebatteries_show
                if (preg_match('#^/centralebatteries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_centralebatteries_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centralebatteries_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\centralebatteriesController::showAction',));
                }
                not_centralebatteries_show:

                // centralebatteries_edit
                if (preg_match('#^/centralebatteries/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_centralebatteries_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centralebatteries_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\centralebatteriesController::editAction',));
                }
                not_centralebatteries_edit:

                // centralebatteries_delete
                if (preg_match('#^/centralebatteries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_centralebatteries_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'centralebatteries_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\centralebatteriesController::deleteAction',));
                }
                not_centralebatteries_delete:

            }

            if (0 === strpos($pathinfo, '/chauffage')) {
                // chauffage_index
                if ('/chauffage' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chauffage_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'chauffage_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\chauffageController::indexAction',  '_route' => 'chauffage_index',);
                }
                not_chauffage_index:

                // chauffage_new
                if ('/chauffage/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chauffage_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\chauffageController::newAction',  '_route' => 'chauffage_new',);
                }
                not_chauffage_new:

                // chauffage_show
                if (preg_match('#^/chauffage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chauffage_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffage_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\chauffageController::showAction',));
                }
                not_chauffage_show:

                // chauffage_edit
                if (preg_match('#^/chauffage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chauffage_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffage_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\chauffageController::editAction',));
                }
                not_chauffage_edit:

                // chauffage_delete
                if (preg_match('#^/chauffage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_chauffage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffage_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\chauffageController::deleteAction',));
                }
                not_chauffage_delete:

            }

            if (0 === strpos($pathinfo, '/circuitelectrique')) {
                // circuitelectrique_index
                if ('/circuitelectrique' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_circuitelectrique_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'circuitelectrique_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\circuitelectriqueController::indexAction',  '_route' => 'circuitelectrique_index',);
                }
                not_circuitelectrique_index:

                // circuitelectrique_new
                if ('/circuitelectrique/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_circuitelectrique_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\circuitelectriqueController::newAction',  '_route' => 'circuitelectrique_new',);
                }
                not_circuitelectrique_new:

                // circuitelectrique_show
                if (preg_match('#^/circuitelectrique/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_circuitelectrique_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'circuitelectrique_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\circuitelectriqueController::showAction',));
                }
                not_circuitelectrique_show:

                // circuitelectrique_edit
                if (preg_match('#^/circuitelectrique/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_circuitelectrique_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'circuitelectrique_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\circuitelectriqueController::editAction',));
                }
                not_circuitelectrique_edit:

                // circuitelectrique_delete
                if (preg_match('#^/circuitelectrique/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_circuitelectrique_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'circuitelectrique_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\circuitelectriqueController::deleteAction',));
                }
                not_circuitelectrique_delete:

            }

            if (0 === strpos($pathinfo, '/climatisation')) {
                // climatisation_index
                if ('/climatisation' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_climatisation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'climatisation_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\climatisationController::indexAction',  '_route' => 'climatisation_index',);
                }
                not_climatisation_index:

                // climatisation_new
                if ('/climatisation/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_climatisation_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\climatisationController::newAction',  '_route' => 'climatisation_new',);
                }
                not_climatisation_new:

                // climatisation_show
                if (preg_match('#^/climatisation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_climatisation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'climatisation_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\climatisationController::showAction',));
                }
                not_climatisation_show:

                // climatisation_edit
                if (preg_match('#^/climatisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_climatisation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'climatisation_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\climatisationController::editAction',));
                }
                not_climatisation_edit:

                // climatisation_delete
                if (preg_match('#^/climatisation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_climatisation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'climatisation_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\climatisationController::deleteAction',));
                }
                not_climatisation_delete:

            }

        }

        if (0 === strpos($pathinfo, '/documentation')) {
            // documentation_index
            if ('/documentation' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentation_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'documentation_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\documentationController::indexAction',  '_route' => 'documentation_index',);
            }
            not_documentation_index:

            // documentation_new
            if ('/documentation/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_documentation_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\documentationController::newAction',  '_route' => 'documentation_new',);
            }
            not_documentation_new:

            // documentation_show
            if (preg_match('#^/documentation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_documentation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentation_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\documentationController::showAction',));
            }
            not_documentation_show:

            // documentation_edit
            if (preg_match('#^/documentation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_documentation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentation_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\documentationController::editAction',));
            }
            not_documentation_edit:

            // documentation_delete
            if (preg_match('#^/documentation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_documentation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentation_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\documentationController::deleteAction',));
            }
            not_documentation_delete:

        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/equipementoptionel')) {
                // equipementoptionel_index
                if ('/equipementoptionel' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_equipementoptionel_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'equipementoptionel_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\equipementoptionelController::indexAction',  '_route' => 'equipementoptionel_index',);
                }
                not_equipementoptionel_index:

                // equipementoptionel_new
                if ('/equipementoptionel/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_equipementoptionel_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\equipementoptionelController::newAction',  '_route' => 'equipementoptionel_new',);
                }
                not_equipementoptionel_new:

                // equipementoptionel_show
                if (preg_match('#^/equipementoptionel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_equipementoptionel_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipementoptionel_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\equipementoptionelController::showAction',));
                }
                not_equipementoptionel_show:

                // equipementoptionel_edit
                if (preg_match('#^/equipementoptionel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_equipementoptionel_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipementoptionel_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\equipementoptionelController::editAction',));
                }
                not_equipementoptionel_edit:

                // equipementoptionel_delete
                if (preg_match('#^/equipementoptionel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_equipementoptionel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipementoptionel_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\equipementoptionelController::deleteAction',));
                }
                not_equipementoptionel_delete:

            }

            if (0 === strpos($pathinfo, '/essaideroute')) {
                // essaideroute_index
                if ('/essaideroute' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_essaideroute_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'essaideroute_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\essaiderouteController::indexAction',  '_route' => 'essaideroute_index',);
                }
                not_essaideroute_index:

                // essaideroute_new
                if ('/essaideroute/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_essaideroute_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\essaiderouteController::newAction',  '_route' => 'essaideroute_new',);
                }
                not_essaideroute_new:

                // essaideroute_show
                if (preg_match('#^/essaideroute/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_essaideroute_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'essaideroute_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\essaiderouteController::showAction',));
                }
                not_essaideroute_show:

                // essaideroute_edit
                if (preg_match('#^/essaideroute/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_essaideroute_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'essaideroute_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\essaiderouteController::editAction',));
                }
                not_essaideroute_edit:

                // essaideroute_delete
                if (preg_match('#^/essaideroute/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_essaideroute_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'essaideroute_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\essaiderouteController::deleteAction',));
                }
                not_essaideroute_delete:

            }

        }

        if (0 === strpos($pathinfo, '/maintiens')) {
            // maintiens_index
            if ('/maintiens' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_maintiens_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'maintiens_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\maintiensController::indexAction',  '_route' => 'maintiens_index',);
            }
            not_maintiens_index:

            // maintiens_new
            if ('/maintiens/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_maintiens_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\maintiensController::newAction',  '_route' => 'maintiens_new',);
            }
            not_maintiens_new:

            // maintiens_show
            if (preg_match('#^/maintiens/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_maintiens_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maintiens_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\maintiensController::showAction',));
            }
            not_maintiens_show:

            // maintiens_edit
            if (preg_match('#^/maintiens/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_maintiens_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maintiens_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\maintiensController::editAction',));
            }
            not_maintiens_edit:

            // maintiens_delete
            if (preg_match('#^/maintiens/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_maintiens_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maintiens_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\maintiensController::deleteAction',));
            }
            not_maintiens_delete:

        }

        if (0 === strpos($pathinfo, '/nettoyage')) {
            // nettoyage_index
            if ('/nettoyage' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nettoyage_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'nettoyage_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\nettoyageController::indexAction',  '_route' => 'nettoyage_index',);
            }
            not_nettoyage_index:

            // nettoyage_new
            if ('/nettoyage/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nettoyage_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\nettoyageController::newAction',  '_route' => 'nettoyage_new',);
            }
            not_nettoyage_new:

            // nettoyage_show
            if (preg_match('#^/nettoyage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nettoyage_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nettoyage_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\nettoyageController::showAction',));
            }
            not_nettoyage_show:

            // nettoyage_edit
            if (preg_match('#^/nettoyage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nettoyage_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nettoyage_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\nettoyageController::editAction',));
            }
            not_nettoyage_edit:

            // nettoyage_delete
            if (preg_match('#^/nettoyage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_nettoyage_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nettoyage_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\nettoyageController::deleteAction',));
            }
            not_nettoyage_delete:

        }

        if (0 === strpos($pathinfo, '/portire')) {
            // portire_index
            if ('/portire' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_portire_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'portire_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\portireController::indexAction',  '_route' => 'portire_index',);
            }
            not_portire_index:

            // portire_new
            if ('/portire/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_portire_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\portireController::newAction',  '_route' => 'portire_new',);
            }
            not_portire_new:

            // portire_show
            if (preg_match('#^/portire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_portire_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portire_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\portireController::showAction',));
            }
            not_portire_show:

            // portire_edit
            if (preg_match('#^/portire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_portire_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portire_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\portireController::editAction',));
            }
            not_portire_edit:

            // portire_delete
            if (preg_match('#^/portire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_portire_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portire_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\portireController::deleteAction',));
            }
            not_portire_delete:

        }

        if (0 === strpos($pathinfo, '/roues')) {
            // roues_index
            if ('/roues' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_roues_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'roues_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\rouesController::indexAction',  '_route' => 'roues_index',);
            }
            not_roues_index:

            // roues_new
            if ('/roues/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_roues_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\rouesController::newAction',  '_route' => 'roues_new',);
            }
            not_roues_new:

            // roues_show
            if (preg_match('#^/roues/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_roues_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roues_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\rouesController::showAction',));
            }
            not_roues_show:

            // roues_edit
            if (preg_match('#^/roues/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_roues_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roues_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\rouesController::editAction',));
            }
            not_roues_edit:

            // roues_delete
            if (preg_match('#^/roues/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_roues_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roues_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\rouesController::deleteAction',));
            }
            not_roues_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/securite')) {
                // securite_index
                if ('/securite' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_securite_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'securite_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\securiteController::indexAction',  '_route' => 'securite_index',);
                }
                not_securite_index:

                // securite_new
                if ('/securite/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_securite_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\securiteController::newAction',  '_route' => 'securite_new',);
                }
                not_securite_new:

                // securite_show
                if (preg_match('#^/securite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_securite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'securite_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\securiteController::showAction',));
                }
                not_securite_show:

                // securite_edit
                if (preg_match('#^/securite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_securite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'securite_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\securiteController::editAction',));
                }
                not_securite_edit:

                // securite_delete
                if (preg_match('#^/securite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_securite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'securite_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\securiteController::deleteAction',));
                }
                not_securite_delete:

            }

            if (0 === strpos($pathinfo, '/siege')) {
                // siege_index
                if ('/siege' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_siege_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'siege_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\siegeController::indexAction',  '_route' => 'siege_index',);
                }
                not_siege_index:

                // siege_new
                if ('/siege/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_siege_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\siegeController::newAction',  '_route' => 'siege_new',);
                }
                not_siege_new:

                // siege_show
                if (preg_match('#^/siege/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_siege_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siege_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\siegeController::showAction',));
                }
                not_siege_show:

                // siege_edit
                if (preg_match('#^/siege/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_siege_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siege_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\siegeController::editAction',));
                }
                not_siege_edit:

                // siege_delete
                if (preg_match('#^/siege/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_siege_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'siege_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\siegeController::deleteAction',));
                }
                not_siege_delete:

            }

            if (0 === strpos($pathinfo, '/soutebagage')) {
                // soutebagage_index
                if ('/soutebagage' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_soutebagage_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'soutebagage_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\soutebagageController::indexAction',  '_route' => 'soutebagage_index',);
                }
                not_soutebagage_index:

                // soutebagage_new
                if ('/soutebagage/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_soutebagage_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\soutebagageController::newAction',  '_route' => 'soutebagage_new',);
                }
                not_soutebagage_new:

                // soutebagage_show
                if (preg_match('#^/soutebagage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_soutebagage_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutebagage_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\soutebagageController::showAction',));
                }
                not_soutebagage_show:

                // soutebagage_edit
                if (preg_match('#^/soutebagage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_soutebagage_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutebagage_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\soutebagageController::editAction',));
                }
                not_soutebagage_edit:

                // soutebagage_delete
                if (preg_match('#^/soutebagage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_soutebagage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soutebagage_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\soutebagageController::deleteAction',));
                }
                not_soutebagage_delete:

            }

        }

        if (0 === strpos($pathinfo, '/t')) {
            if (0 === strpos($pathinfo, '/tapisserie')) {
                // tapisserie_index
                if ('/tapisserie' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tapisserie_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'tapisserie_index');
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\tapisserieController::indexAction',  '_route' => 'tapisserie_index',);
                }
                not_tapisserie_index:

                // tapisserie_new
                if ('/tapisserie/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tapisserie_new;
                    }

                    return array (  '_controller' => 'My\\ControlerBundle\\Controller\\tapisserieController::newAction',  '_route' => 'tapisserie_new',);
                }
                not_tapisserie_new:

                // tapisserie_show
                if (preg_match('#^/tapisserie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_tapisserie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tapisserie_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\tapisserieController::showAction',));
                }
                not_tapisserie_show:

                // tapisserie_edit
                if (preg_match('#^/tapisserie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_tapisserie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tapisserie_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\tapisserieController::editAction',));
                }
                not_tapisserie_edit:

                // tapisserie_delete
                if (preg_match('#^/tapisserie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_tapisserie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tapisserie_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\tapisserieController::deleteAction',));
                }
                not_tapisserie_delete:

            }

            if (0 === strpos($pathinfo, '/test')) {
                if (0 === strpos($pathinfo, '/testetancheite')) {
                    // testetancheite_index
                    if ('/testetancheite' === rtrim($pathinfo, '/')) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_testetancheite_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'testetancheite_index');
                        }

                        return array (  '_controller' => 'My\\ControlerBundle\\Controller\\testetancheiteController::indexAction',  '_route' => 'testetancheite_index',);
                    }
                    not_testetancheite_index:

                    // testetancheite_new
                    if ('/testetancheite/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_testetancheite_new;
                        }

                        return array (  '_controller' => 'My\\ControlerBundle\\Controller\\testetancheiteController::newAction',  '_route' => 'testetancheite_new',);
                    }
                    not_testetancheite_new:

                    // testetancheite_show
                    if (preg_match('#^/testetancheite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_testetancheite_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testetancheite_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testetancheiteController::showAction',));
                    }
                    not_testetancheite_show:

                    // testetancheite_edit
                    if (preg_match('#^/testetancheite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_testetancheite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testetancheite_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testetancheiteController::editAction',));
                    }
                    not_testetancheite_edit:

                    // testetancheite_delete
                    if (preg_match('#^/testetancheite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_testetancheite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testetancheite_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testetancheiteController::deleteAction',));
                    }
                    not_testetancheite_delete:

                }

                if (0 === strpos($pathinfo, '/testpeinture')) {
                    // testpeinture_index
                    if ('/testpeinture' === rtrim($pathinfo, '/')) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_testpeinture_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'testpeinture_index');
                        }

                        return array (  '_controller' => 'My\\ControlerBundle\\Controller\\testpeintureController::indexAction',  '_route' => 'testpeinture_index',);
                    }
                    not_testpeinture_index:

                    // testpeinture_new
                    if ('/testpeinture/new' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_testpeinture_new;
                        }

                        return array (  '_controller' => 'My\\ControlerBundle\\Controller\\testpeintureController::newAction',  '_route' => 'testpeinture_new',);
                    }
                    not_testpeinture_new:

                    // testpeinture_show
                    if (preg_match('#^/testpeinture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_testpeinture_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testpeinture_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testpeintureController::showAction',));
                    }
                    not_testpeinture_show:

                    // testpeinture_edit
                    if (preg_match('#^/testpeinture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_testpeinture_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testpeinture_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testpeintureController::editAction',));
                    }
                    not_testpeinture_edit:

                    // testpeinture_delete
                    if (preg_match('#^/testpeinture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_testpeinture_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'testpeinture_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\testpeintureController::deleteAction',));
                    }
                    not_testpeinture_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/vitrage')) {
            // vitrage_index
            if ('/vitrage' === rtrim($pathinfo, '/')) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vitrage_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'vitrage_index');
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\vitrageController::indexAction',  '_route' => 'vitrage_index',);
            }
            not_vitrage_index:

            // vitrage_new
            if ('/vitrage/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_vitrage_new;
                }

                return array (  '_controller' => 'My\\ControlerBundle\\Controller\\vitrageController::newAction',  '_route' => 'vitrage_new',);
            }
            not_vitrage_new:

            // vitrage_show
            if (preg_match('#^/vitrage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vitrage_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vitrage_show')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\vitrageController::showAction',));
            }
            not_vitrage_show:

            // vitrage_edit
            if (preg_match('#^/vitrage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_vitrage_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vitrage_edit')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\vitrageController::editAction',));
            }
            not_vitrage_edit:

            // vitrage_delete
            if (preg_match('#^/vitrage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_vitrage_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vitrage_delete')), array (  '_controller' => 'My\\ControlerBundle\\Controller\\vitrageController::deleteAction',));
            }
            not_vitrage_delete:

        }

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

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/peinture')) {
                // peinture_index
                if ('/peinture' === rtrim($pathinfo, '/')) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_peinture_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'peinture_index');
                    }

                    return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PeintureController::indexAction',  '_route' => 'peinture_index',);
                }
                not_peinture_index:

                // peinture_new
                if ('/peinture/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_peinture_new;
                    }

                    return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PeintureController::newAction',  '_route' => 'peinture_new',);
                }
                not_peinture_new:

                // peinture_show
                if (preg_match('#^/peinture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_peinture_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'peinture_show')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PeintureController::showAction',));
                }
                not_peinture_show:

                // peinture_edit
                if (preg_match('#^/peinture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_peinture_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'peinture_edit')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PeintureController::editAction',));
                }
                not_peinture_edit:

                // peinture_delete
                if (preg_match('#^/peinture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_peinture_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'peinture_delete')), array (  '_controller' => 'My\\AlphabusBundle\\Controller\\PeintureController::deleteAction',));
                }
                not_peinture_delete:

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

        // service_test
        if ('/service_test' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_service_test;
            }

            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ServicetestController::indexAction',  '_route' => 'service_test',);
        }
        not_service_test:

        // my_alphabus_servicetest_newtest
        if ('/newtest' === $pathinfo) {
            return array (  '_controller' => 'My\\AlphabusBundle\\Controller\\ServicetestController::newtestAction',  '_route' => 'my_alphabus_servicetest_newtest',);
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

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ('/_console' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
