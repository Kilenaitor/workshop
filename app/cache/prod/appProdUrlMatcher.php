<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // student_work_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_work_homepage')), array (  '_controller' => 'StudentWorkBundle:Default:index',));
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Student\\WorkBundle\\Controller\\WorkController::indexAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Student\\WorkBundle\\Controller\\WorkController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Student\\WorkBundle\\Controller\\WorkController::logoutAction',  '_route' => 'logout',);
            }

        }

        // signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Student\\WorkBundle\\Controller\\WorkController::signupAction',  '_route' => 'signup',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
