<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
