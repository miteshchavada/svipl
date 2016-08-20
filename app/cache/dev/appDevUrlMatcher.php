<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/team')) {
            // delete_team
            if (0 === strpos($pathinfo, '/team/delete') && preg_match('#^/team/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_team')), array (  '_controller' => 'Acme\\TeamBundle\\Controller\\DefaultController::deleteAction',));
            }

            // edit_team
            if (0 === strpos($pathinfo, '/team/edit') && preg_match('#^/team/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_team')), array (  '_controller' => 'Acme\\TeamBundle\\Controller\\DefaultController::editAction',));
            }

            // add_team
            if ($pathinfo === '/team/add') {
                return array (  '_controller' => 'Acme\\TeamBundle\\Controller\\DefaultController::addAction',  '_route' => 'add_team',);
            }

            // acme_team
            if ($pathinfo === '/team') {
                return array (  '_controller' => 'Acme\\TeamBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_team',);
            }

        }

        if (0 === strpos($pathinfo, '/info')) {
            if (0 === strpos($pathinfo, '/info/work')) {
                // acme_work_delete
                if (0 === strpos($pathinfo, '/info/work/delete') && preg_match('#^/info/work/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_work_delete')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\WorkController::deleteAction',));
                }

                // acme_work_edit
                if (0 === strpos($pathinfo, '/info/work/edit') && preg_match('#^/info/work/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_work_edit')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\WorkController::editAction',));
                }

                // acme_work_add
                if ($pathinfo === '/info/work/add') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\WorkController::addAction',  '_route' => 'acme_work_add',);
                }

                // acme_info_work
                if ($pathinfo === '/info/work') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\WorkController::indexAction',  '_route' => 'acme_info_work',);
                }

            }

            if (0 === strpos($pathinfo, '/info/people')) {
                // acme_people_delete
                if (0 === strpos($pathinfo, '/info/people/delete') && preg_match('#^/info/people/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_people_delete')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\PeopleController::deleteAction',));
                }

                // acme_people_edit
                if (0 === strpos($pathinfo, '/info/people/edit') && preg_match('#^/info/people/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_people_edit')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\PeopleController::editAction',));
                }

                // acme_people_add
                if ($pathinfo === '/info/people/add') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\PeopleController::addAction',  '_route' => 'acme_people_add',);
                }

                // acme_info_people
                if ($pathinfo === '/info/people') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\PeopleController::indexAction',  '_route' => 'acme_info_people',);
                }

            }

            if (0 === strpos($pathinfo, '/info/services')) {
                // acme_services_delete
                if (0 === strpos($pathinfo, '/info/services/delete') && preg_match('#^/info/services/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_services_delete')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\ServiceslistController::deleteAction',));
                }

                // acme_services_edit
                if (0 === strpos($pathinfo, '/info/services/edit') && preg_match('#^/info/services/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_services_edit')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\ServiceslistController::editAction',));
                }

                // acme_services_add
                if ($pathinfo === '/info/services/add') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\ServiceslistController::addAction',  '_route' => 'acme_services_add',);
                }

                // acme_info_serviceslist
                if ($pathinfo === '/info/serviceslist') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\ServiceslistController::indexAction',  '_route' => 'acme_info_serviceslist',);
                }

            }

            if (0 === strpos($pathinfo, '/info/news')) {
                // acme_news_delete
                if ($pathinfo === '/info/news/delete') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\NewslistController::deleteAction',  '_route' => 'acme_news_delete',);
                }

                // acme_news_edit
                if ($pathinfo === '/info/news/edit') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\NewslistController::editAction',  '_route' => 'acme_news_edit',);
                }

                // acme_news_add
                if ($pathinfo === '/info/news/add') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\NewslistController::addAction',  '_route' => 'acme_news_add',);
                }

                // acme_info_newslist
                if ($pathinfo === '/info/newslist') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\NewslistController::indexAction',  '_route' => 'acme_info_newslist',);
                }

            }

            if (0 === strpos($pathinfo, '/info/testi')) {
                // acme_testiedit
                if (0 === strpos($pathinfo, '/info/testiedit') && preg_match('#^/info/testiedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_testiedit')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::testieditAction',));
                }

                // acme_testidel
                if (0 === strpos($pathinfo, '/info/testidel') && preg_match('#^/info/testidel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_testidel')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::testidelAction',));
                }

                // acme_testiadd
                if ($pathinfo === '/info/testiadd') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::testiaddAction',  '_route' => 'acme_testiadd',);
                }

                // acme_info_testimonials
                if ($pathinfo === '/info/testimonials') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::testimonialsAction',  '_route' => 'acme_info_testimonials',);
                }

            }

            // acme_info_ourservice
            if ($pathinfo === '/info/ourservice') {
                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::ourserviceAction',  '_route' => 'acme_info_ourservice',);
            }

            // acme_info_contactus
            if ($pathinfo === '/info/contactus') {
                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::contactusAction',  '_route' => 'acme_info_contactus',);
            }

            // acme_info_delete
            if ($pathinfo === '/info/delete') {
                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::deleteAction',  '_route' => 'acme_info_delete',);
            }

            // acme_info_edit
            if ($pathinfo === '/info/edit') {
                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::editAction',  '_route' => 'acme_info_edit',);
            }

            // acme_info_add
            if ($pathinfo === '/info/add') {
                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::addAction',  '_route' => 'acme_info_add',);
            }

            if (0 === strpos($pathinfo, '/info/logo')) {
                // acme_info_logo
                if ($pathinfo === '/info/logo') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::logoAction',  '_route' => 'acme_info_logo',);
                }

                // acme_logoadd
                if ($pathinfo === '/info/logoadd') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::logoaddAction',  '_route' => 'acme_logoadd',);
                }

                // logo_status
                if ($pathinfo === '/info/logostatus') {
                    return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::logostatusAction',  '_route' => 'logo_status',);
                }

                // acme_logoedit
                if (0 === strpos($pathinfo, '/info/logoedit') && preg_match('#^/info/logoedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_logoedit')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::logoeditAction',));
                }

                // acme_logodelete
                if (0 === strpos($pathinfo, '/info/logodelete') && preg_match('#^/info/logodelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_logodelete')), array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::logodeleteAction',));
                }

            }

            // acme_info
            if (rtrim($pathinfo, '/') === '/info') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_info');
                }

                return array (  '_controller' => 'Acme\\InfoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_info',);
            }

        }

        // acme_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_home');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_home',);
        }

        // aboutus
        if (rtrim($pathinfo, '/') === '/aboutus') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aboutus');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::aboutusAction',  '_route' => 'aboutus',);
        }

        // services
        if (rtrim($pathinfo, '/') === '/services') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'services');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::servicesAction',  '_route' => 'services',);
        }

        // portfolio
        if (rtrim($pathinfo, '/') === '/portfolio') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'portfolio');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::portfolioAction',  '_route' => 'portfolio',);
        }

        // blog
        if (rtrim($pathinfo, '/') === '/blog') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::blogAction',  '_route' => 'blog',);
        }

        // pricing
        if (rtrim($pathinfo, '/') === '/pricing') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pricing');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::pricingAction',  '_route' => 'pricing',);
        }

        // shortcodes
        if (rtrim($pathinfo, '/') === '/shortcodes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'shortcodes');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::shortcodesAction',  '_route' => 'shortcodes',);
        }

        // contactus
        if (rtrim($pathinfo, '/') === '/contactus') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contactus');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::contactusAction',  '_route' => 'contactus',);
        }

        // news
        if (rtrim($pathinfo, '/') === '/news') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'news');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::newsAction',  '_route' => 'news',);
        }

        // products
        if (rtrim($pathinfo, '/') === '/products') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'products');
            }

            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::productsAction',  '_route' => 'products',);
        }

        // contact_sendEmail
        if ($pathinfo === '/contact/sendEmail') {
            return array (  '_controller' => 'Acme\\HomeBundle\\Controller\\DefaultController::sendEmailAction',  '_route' => 'contact_sendEmail',);
        }

        if (0 === strpos($pathinfo, '/image')) {
            // acme_image_edit
            if (0 === strpos($pathinfo, '/image/edit') && preg_match('#^/image/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_image_edit')), array (  '_controller' => 'Acme\\ImageBundle\\Controller\\DefaultController::editAction',));
            }

            // acme_image_delete
            if (0 === strpos($pathinfo, '/image/delete') && preg_match('#^/image/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_image_delete')), array (  '_controller' => 'Acme\\ImageBundle\\Controller\\DefaultController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/image/add')) {
                // acme_image_add
                if ($pathinfo === '/image/add') {
                    return array (  '_controller' => 'Acme\\ImageBundle\\Controller\\DefaultController::addAction',  '_route' => 'acme_image_add',);
                }

                // addimage
                if ($pathinfo === '/image/addimage') {
                    return array (  '_controller' => 'Acme\\ImageBundle\\Controller\\DefaultController::addimageAction',  '_route' => 'addimage',);
                }

            }

            // acme_image
            if (rtrim($pathinfo, '/') === '/image') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_image');
                }

                return array (  '_controller' => 'Acme\\ImageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_image',);
            }

        }

        if (0 === strpos($pathinfo, '/order/de')) {
            // order_detail
            if (0 === strpos($pathinfo, '/order/detail') && preg_match('#^/order/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_detail')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::orderDetailAction',));
            }

            // order_delete
            if (0 === strpos($pathinfo, '/order/delete') && preg_match('#^/order/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_delete')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::orderDeleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/store')) {
                // acme_store_orders
                if ($pathinfo === '/store/orders') {
                    return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::ordersAction',  '_route' => 'acme_store_orders',);
                }

                // status
                if ($pathinfo === '/store/status') {
                    return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::statusAction',  '_route' => 'status',);
                }

            }

            // search
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::searchAction',  '_route' => 'search',);
            }

            if (0 === strpos($pathinfo, '/store')) {
                // sorting
                if ($pathinfo === '/store/sorting') {
                    return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::sortingAction',  '_route' => 'sorting',);
                }

                // acme_store
                if (rtrim($pathinfo, '/') === '/store') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'acme_store');
                    }

                    return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_store',);
                }

            }

        }

        // acme_store_product_list
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_store_product_list')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::listAction',  'page' => 1,));
        }

        // add
        if ($pathinfo === '/store/add') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::addAction',  '_route' => 'add',);
        }

        // addproduct
        if ($pathinfo === '/addproduct') {
            return array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::addproductAction',  '_route' => 'addproduct',);
        }

        if (0 === strpos($pathinfo, '/store')) {
            // edit
            if (0 === strpos($pathinfo, '/store/edit') && preg_match('#^/store/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::editAction',));
            }

            // delete
            if (0 === strpos($pathinfo, '/store/delete') && preg_match('#^/store/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'Acme\\StoreBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
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
                        if ($pathinfo === '/register/confirmed') {
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
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
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

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/user')) {
            // acme_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_user_edit')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::editAction',));
            }

            // acme_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_user_delete')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::deleteAction',));
            }

            // acme_user_status
            if ($pathinfo === '/user/status') {
                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::statusAction',  '_route' => 'acme_user_status',);
            }

            // acme_user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_user');
                }

                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_user',);
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // acme_category
            if ($pathinfo === '/category') {
                return array (  '_controller' => 'Acme\\CategoryBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_category',);
            }

            // category_add
            if ($pathinfo === '/category/add') {
                return array (  '_controller' => 'Acme\\CategoryBundle\\Controller\\DefaultController::addAction',  '_route' => 'category_add',);
            }

            // category_edit
            if (0 === strpos($pathinfo, '/category/edit') && preg_match('#^/category/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Acme\\CategoryBundle\\Controller\\DefaultController::editAction',));
            }

            // category_status
            if ($pathinfo === '/category/status') {
                return array (  '_controller' => 'Acme\\CategoryBundle\\Controller\\DefaultController::statusAction',  '_route' => 'category_status',);
            }

            // category_delete
            if (0 === strpos($pathinfo, '/category/delete') && preg_match('#^/category/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Acme\\CategoryBundle\\Controller\\DefaultController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/footer')) {
            // acme_footer
            if (rtrim($pathinfo, '/') === '/footer') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_footer');
                }

                return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_footer',);
            }

            if (0 === strpos($pathinfo, '/footer/follow')) {
                if (0 === strpos($pathinfo, '/footer/followus')) {
                    // acme_footer_followus
                    if ($pathinfo === '/footer/followus') {
                        return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::followusAction',  '_route' => 'acme_footer_followus',);
                    }

                    // acme_footer_followusadd
                    if ($pathinfo === '/footer/followusadd') {
                        return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::followusaddAction',  '_route' => 'acme_footer_followusadd',);
                    }

                }

                // follow_status
                if ($pathinfo === '/footer/followstatus') {
                    return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::followstatusAction',  '_route' => 'follow_status',);
                }

            }

            // acme_footer_address
            if ($pathinfo === '/footer/address') {
                return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::addressAction',  '_route' => 'acme_footer_address',);
            }

            // acme_footer_whyus
            if ($pathinfo === '/footer/whyus') {
                return array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::whyusAction',  '_route' => 'acme_footer_whyus',);
            }

            if (0 === strpos($pathinfo, '/footer/follow')) {
                // acme_followedit
                if (0 === strpos($pathinfo, '/footer/followedit') && preg_match('#^/footer/followedit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_followedit')), array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::followeditAction',));
                }

                // acme_followdelete
                if (0 === strpos($pathinfo, '/footer/followdelete') && preg_match('#^/footer/followdelete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_followdelete')), array (  '_controller' => 'Acme\\FooterBundle\\Controller\\DefaultController::followdeleteAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
