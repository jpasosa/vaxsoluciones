<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::homepageAction',  '_route' => 'homepage',);
        }

        // nosotros
        if ($pathinfo === '/nosotros') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::aboutusAction',  '_route' => 'nosotros',);
        }

        // historia
        if ($pathinfo === '/nuestra-historia') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::historyAction',  '_route' => 'historia',);
        }

        // servicios
        if ($pathinfo === '/servicios/motherboard') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::motherAction',  '_route' => 'servicios',);
        }

        // garantia
        if ($pathinfo === '/servicios/garantia') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::warrantyAction',  '_route' => 'garantia',);
        }

        // motherboard
        if ($pathinfo === '/servicios/motherboard') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::motherAction',  '_route' => 'motherboard',);
        }

        // notebook
        if ($pathinfo === '/servicios/notebook') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::notebookAction',  '_route' => 'notebook',);
        }

        // placavideo
        if ($pathinfo === '/servicios/placa-de-video') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::videocardAction',  '_route' => 'placavideo',);
        }

        // seguridad
        if ($pathinfo === '/servicios/seguridad-y-comunicaciones') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::securityAction',  '_route' => 'seguridad',);
        }

        // faq
        if ($pathinfo === '/servicios/faq') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::faqAction',  '_route' => 'faq',);
        }

        // clientes
        if ($pathinfo === '/nuestros-clientes') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::clientsAction',  '_route' => 'clientes',);
        }

        // ubiquiti
        if ($pathinfo === '/ubiquiti') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::ubiquitiAction',  '_route' => 'ubiquiti',);
        }

        // ofertas
        if ($pathinfo === '/ofertas') {
            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::dealsAction',  '_route' => 'ofertas',);
        }

        // contacto
        if ($pathinfo === '/contacto') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_contacto;
            }

            return array (  '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::contactAction',  '_route' => 'contacto',);
        }
        not_contacto:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
