<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::homepageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),),
        'nosotros' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::aboutusAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nosotros',    ),  ),),
        'historia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::historyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuestra-historia',    ),  ),),
        'servicios' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::motherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/motherboard',    ),  ),),
        'garantia' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::warrantyAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/garantia',    ),  ),),
        'motherboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::motherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/motherboard',    ),  ),),
        'notebook' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::notebookAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/notebook',    ),  ),),
        'placavideo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::videocardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/placa-de-video',    ),  ),),
        'seguridad' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::securityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/seguridad-y-comunicaciones',    ),  ),),
        'faq' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::faqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/servicios/faq',    ),  ),),
        'clientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::clientsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuestros-clientes',    ),  ),),
        'ubiquiti' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::ubiquitiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ubiquiti',    ),  ),),
        'ofertas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::dealsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ofertas',    ),  ),),
        'contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Vax\\FrontBundle\\Controller\\PageController::contactAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }
}
