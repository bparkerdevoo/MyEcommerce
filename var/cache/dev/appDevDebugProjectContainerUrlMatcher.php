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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
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

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/eshop')) {
            // bon_de_commande
            if ('/eshop/bondecommande' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\CommandeController::indexAction',  '_route' => 'bon_de_commande',);
            }

            // panier
            if ('/eshop/Panier' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\CommandeController::getSession',  '_route' => 'panier',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'panier'));
                }

                return $ret;
            }

            // PanierProduit
            if ('/eshop' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\CommandeController::FormAction',  '_route' => 'PanierProduit',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'PanierProduit'));
                }

                return $ret;
            }

            // bienvenue
            if ('/eshop/msf/bienvenue' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bienvenue',);
            }

            // upload_image
            if ('/eshop/Media/upload' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\DefaultController::MediaAction',  '_route' => 'upload_image',);
            }

            if (0 === strpos($pathinfo, '/eshop/produit')) {
                // upload
                if ('/eshop/produit/upload' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\DefaultController::fileAction',  '_route' => 'upload',);
                }

                // shop_produit
                if ('/eshop/produit' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\EcommerceController::ProduitAction',  '_route' => 'shop_produit',);
                }

                // produit
                if ('/eshop/produit' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::produitAction',  '_route' => 'produit',);
                }

                // display_produit
                if (preg_match('#^/eshop/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'display_produit')), array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::showProduitAction',));
                }

            }

            // afficher_panier
            if ('/eshop/panier/afficher' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\EcommerceController::afficherPanierAction',  '_route' => 'afficher_panier',);
            }

            if (0 === strpos($pathinfo, '/eshop/C')) {
                // myscentfactory_msf_ecommerce_commande
                if ('/eshop/Commande' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\EcommerceController::CommandeAction',  '_route' => 'myscentfactory_msf_ecommerce_commande',);
                }

                // myscentfactory_msf_factory_custom
                if ('/eshop/Custom' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\FactoryController::CustomAction',  '_route' => 'myscentfactory_msf_factory_custom',);
                }

                // catalogue
                if ('/eshop/Catalogue' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\PageController::CatalogueAction',  '_route' => 'catalogue',);
                }

            }

            // ajouterAuPanier
            if (0 === strpos($pathinfo, '/eshop/Panier') && preg_match('#^/eshop/Panier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterAuPanier')), array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\EcommerceController::PanierAction',));
            }

            // suggestion
            if ('/eshop/suggestion' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\FactoryController::composeAction',  '_route' => 'suggestion',);
            }

            if (0 === strpos($pathinfo, '/eshop/c')) {
                // view_customise
                if ('/eshop/customise/view' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\FactoryController::viewCustomiseAction',  '_route' => 'view_customise',);
                }

                // condition
                if ('/eshop/condition' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\PageController::ConditionAction',  '_route' => 'condition',);
                }

                if (0 === strpos($pathinfo, '/eshop/categorie')) {
                    // view_categorie
                    if ('/eshop/categorie/view' === $pathinfo) {
                        return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::viewCategorieAction',  '_route' => 'view_categorie',);
                    }

                    // create_categorie
                    if ('/eshop/categorie/create' === $pathinfo) {
                        return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::createCategorieAction',  '_route' => 'create_categorie',);
                    }

                    // update_categorie
                    if (0 === strpos($pathinfo, '/eshop/categorie/update') && preg_match('#^/eshop/categorie/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_categorie')), array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::updateCategorieAction',));
                    }

                    // show_categorie
                    if (0 === strpos($pathinfo, '/eshop/categorie/show') && preg_match('#^/eshop/categorie/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_categorie')), array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::showCategorieAction',));
                    }

                    // delete_post_route
                    if (0 === strpos($pathinfo, '/eshop/categorie/delete') && preg_match('#^/eshop/categorie/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_post_route')), array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::deleteCategorieAction',));
                    }

                    // ajout_categorie
                    if ('/eshop/categorie' === $pathinfo) {
                        return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\ProduitsController::addAction',  '_route' => 'ajout_categorie',);
                    }

                }

            }

            // myscentfactory_msf_page_accueil
            if ('/eshop/Accueil' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\PageController::AccueilAction',  '_route' => 'myscentfactory_msf_page_accueil',);
            }

            // myscentfactory_msf_page_apropos
            if ('/eshop/Apropos' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\PageController::AproposAction',  '_route' => 'myscentfactory_msf_page_apropos',);
            }

            // myscentfactory_msf_page_blog
            if ('/eshop/Blog' === $pathinfo) {
                return array (  '_controller' => 'MyScentFactory\\MSFBundle\\Controller\\PageController::BlogAction',  '_route' => 'myscentfactory_msf_page_blog',);
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect'));
                }

                return $ret;
            }

            // sonata_admin_dashboard
            if ('/admin/dashboard' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                if (0 === strpos($pathinfo, '/admin/core/get-')) {
                    // sonata_admin_retrieve_form_element
                    if ('/admin/core/get-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                    }

                    // sonata_admin_retrieve_autocomplete_items
                    if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                    }

                }

                // sonata_admin_append_form_element
                if ('/admin/core/append-form-field-element' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_set_object_field_value
                if ('/admin/core/set-object-field-value' === $pathinfo) {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ('/admin/search' === $pathinfo) {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/app/category')) {
                // admin_app_category_list
                if ('/admin/app/category/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_list',  '_route' => 'admin_app_category_list',);
                }

                // admin_app_category_create
                if ('/admin/app/category/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_create',  '_route' => 'admin_app_category_create',);
                }

                // admin_app_category_batch
                if ('/admin/app/category/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_batch',  '_route' => 'admin_app_category_batch',);
                }

                // admin_app_category_edit
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_edit',));
                }

                // admin_app_category_delete
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_delete',));
                }

                // admin_app_category_show
                if (preg_match('#^/admin/app/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_show',));
                }

                // admin_app_category_export
                if ('/admin/app/category/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_category_export',  '_route' => 'admin_app_category_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/app/blogpost')) {
                // admin_app_blogpost_list
                if ('/admin/app/blogpost/list' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_list',  '_route' => 'admin_app_blogpost_list',);
                }

                // admin_app_blogpost_create
                if ('/admin/app/blogpost/create' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_create',  '_route' => 'admin_app_blogpost_create',);
                }

                // admin_app_blogpost_batch
                if ('/admin/app/blogpost/batch' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_batch',  '_route' => 'admin_app_blogpost_batch',);
                }

                // admin_app_blogpost_edit
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_edit',));
                }

                // admin_app_blogpost_delete
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_delete',));
                }

                // admin_app_blogpost_show
                if (preg_match('#^/admin/app/blogpost/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_blogpost_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_show',));
                }

                // admin_app_blogpost_export
                if ('/admin/app/blogpost/export' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.blog_post',  '_sonata_name' => 'admin_app_blogpost_export',  '_route' => 'admin_app_blogpost_export',);
                }

            }

            elseif (0 === strpos($pathinfo, '/admin/myscentfactory')) {
                if (0 === strpos($pathinfo, '/admin/myscentfactory/user/client')) {
                    // client_admin_list
                    if ('/admin/myscentfactory/user/client/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::listAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_list',  '_route' => 'client_admin_list',);
                    }

                    // client_admin_create
                    if ('/admin/myscentfactory/user/client/create' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::createAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_create',  '_route' => 'client_admin_create',);
                    }

                    // client_admin_batch
                    if ('/admin/myscentfactory/user/client/batch' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::batchAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_batch',  '_route' => 'client_admin_batch',);
                    }

                    // client_admin_edit
                    if (preg_match('#^/admin/myscentfactory/user/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::editAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_edit',));
                    }

                    // client_admin_delete
                    if (preg_match('#^/admin/myscentfactory/user/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::deleteAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_delete',));
                    }

                    // client_admin_show
                    if (preg_match('#^/admin/myscentfactory/user/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::showAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_show',));
                    }

                    // client_admin_export
                    if ('/admin/myscentfactory/user/client/export' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::exportAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_export',  '_route' => 'client_admin_export',);
                    }

                    // client_admin_client
                    if ('/admin/myscentfactory/user/client/client' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::clientAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_client',  '_route' => 'client_admin_client',);
                    }

                    // client_admin_view
                    if (preg_match('#^/admin/myscentfactory/user/client/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::viewAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_view',));
                    }

                    // client_admin_update_action
                    if (preg_match('#^/admin/myscentfactory/user/client/(?P<id>[^/]++)/custom\\-action$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_client_admin_update_action;
                        }

                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'client_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::updateActionAction',  '_sonata_admin' => 'admin.client',  '_sonata_name' => 'client_admin_update_action',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$scheme])) {
                            return array_replace($ret, $this->redirect($rawPathinfo, 'client_admin_update_action', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_client_admin_update_action:

                }

                elseif (0 === strpos($pathinfo, '/admin/myscentfactory/user/user')) {
                    // user_admin_list
                    if ('/admin/myscentfactory/user/user/list' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::listAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_list',  '_route' => 'user_admin_list',);
                    }

                    // user_admin_create
                    if ('/admin/myscentfactory/user/user/create' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::createAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_create',  '_route' => 'user_admin_create',);
                    }

                    // user_admin_batch
                    if ('/admin/myscentfactory/user/user/batch' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::batchAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_batch',  '_route' => 'user_admin_batch',);
                    }

                    // user_admin_edit
                    if (preg_match('#^/admin/myscentfactory/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::editAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_edit',));
                    }

                    // user_admin_delete
                    if (preg_match('#^/admin/myscentfactory/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::deleteAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_delete',));
                    }

                    // user_admin_show
                    if (preg_match('#^/admin/myscentfactory/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::showAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_show',));
                    }

                    // user_admin_export
                    if ('/admin/myscentfactory/user/user/export' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::exportAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_export',  '_route' => 'user_admin_export',);
                    }

                    // user_admin_user
                    if ('/admin/myscentfactory/user/user/user' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::userAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_user',  '_route' => 'user_admin_user',);
                    }

                    // user_admin_view
                    if (preg_match('#^/admin/myscentfactory/user/user/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::viewAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_view',));
                    }

                    // user_admin_update_action
                    if (preg_match('#^/admin/myscentfactory/user/user/(?P<id>[^/]++)/custom\\-action$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_user_admin_update_action;
                        }

                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'user_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\UserCRUDController::updateActionAction',  '_sonata_admin' => 'admin.user',  '_sonata_name' => 'user_admin_update_action',));
                        $requiredSchemes = array (  'https' => 0,);
                        if (!isset($requiredSchemes[$scheme])) {
                            return array_replace($ret, $this->redirect($rawPathinfo, 'user_admin_update_action', key($requiredSchemes)));
                        }

                        return $ret;
                    }
                    not_user_admin_update_action:

                }

                elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf')) {
                    if (0 === strpos($pathinfo, '/admin/myscentfactory/msf/support')) {
                        // support_admin_list
                        if ('/admin/myscentfactory/msf/support/list' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::listAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_list',  '_route' => 'support_admin_list',);
                        }

                        // support_admin_create
                        if ('/admin/myscentfactory/msf/support/create' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::createAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_create',  '_route' => 'support_admin_create',);
                        }

                        // support_admin_batch
                        if ('/admin/myscentfactory/msf/support/batch' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::batchAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_batch',  '_route' => 'support_admin_batch',);
                        }

                        // support_admin_edit
                        if (preg_match('#^/admin/myscentfactory/msf/support/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::editAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_edit',));
                        }

                        // support_admin_delete
                        if (preg_match('#^/admin/myscentfactory/msf/support/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::deleteAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_delete',));
                        }

                        // support_admin_show
                        if (preg_match('#^/admin/myscentfactory/msf/support/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::showAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_show',));
                        }

                        // support_admin_export
                        if ('/admin/myscentfactory/msf/support/export' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::exportAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_export',  '_route' => 'support_admin_export',);
                        }

                        // support_admin_support
                        if ('/admin/myscentfactory/msf/support/support' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::supportAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_support',  '_route' => 'support_admin_support',);
                        }

                        // support_admin_view
                        if (preg_match('#^/admin/myscentfactory/msf/support/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'support_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::viewAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_view',));
                        }

                        // support_admin_update_action
                        if (preg_match('#^/admin/myscentfactory/msf/support/(?P<id>[^/]++)/update_action$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_support_admin_update_action;
                            }

                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'support_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\SupportCRUDController::updateActionAction',  '_sonata_admin' => 'admin.support',  '_sonata_name' => 'support_admin_update_action',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$scheme])) {
                                return array_replace($ret, $this->redirect($rawPathinfo, 'support_admin_update_action', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_support_admin_update_action:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/p')) {
                        if (0 === strpos($pathinfo, '/admin/myscentfactory/msf/parfum')) {
                            // parfum_admin_list
                            if ('/admin/myscentfactory/msf/parfum/list' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::listAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_list',  '_route' => 'parfum_admin_list',);
                            }

                            // parfum_admin_create
                            if ('/admin/myscentfactory/msf/parfum/create' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::createAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_create',  '_route' => 'parfum_admin_create',);
                            }

                            // parfum_admin_batch
                            if ('/admin/myscentfactory/msf/parfum/batch' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::batchAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_batch',  '_route' => 'parfum_admin_batch',);
                            }

                            // parfum_admin_edit
                            if (preg_match('#^/admin/myscentfactory/msf/parfum/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parfum_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::editAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_edit',));
                            }

                            // parfum_admin_delete
                            if (preg_match('#^/admin/myscentfactory/msf/parfum/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parfum_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::deleteAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_delete',));
                            }

                            // parfum_admin_show
                            if (preg_match('#^/admin/myscentfactory/msf/parfum/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parfum_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::showAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_show',));
                            }

                            // parfum_admin_export
                            if ('/admin/myscentfactory/msf/parfum/export' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::exportAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_export',  '_route' => 'parfum_admin_export',);
                            }

                            // parfum_admin_parfum
                            if ('/admin/myscentfactory/msf/parfum/parfum' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::parfumAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_parfum',  '_route' => 'parfum_admin_parfum',);
                            }

                            // parfum_admin_view
                            if (preg_match('#^/admin/myscentfactory/msf/parfum/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parfum_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::viewAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_view',));
                            }

                            // parfum_admin_update_action
                            if (preg_match('#^/admin/myscentfactory/msf/parfum/(?P<id>[^/]++)/update_action$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_parfum_admin_update_action;
                                }

                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'parfum_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\ParfumCRUDController::updateActionAction',  '_sonata_admin' => 'admin.parfum',  '_sonata_name' => 'parfum_admin_update_action',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$scheme])) {
                                    return array_replace($ret, $this->redirect($rawPathinfo, 'parfum_admin_update_action', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_parfum_admin_update_action:

                        }

                        elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/produit')) {
                            // produit_admin_list
                            if ('/admin/myscentfactory/msf/produit/list' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::listAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_list',  '_route' => 'produit_admin_list',);
                            }

                            // produit_admin_create
                            if ('/admin/myscentfactory/msf/produit/create' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::createAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_create',  '_route' => 'produit_admin_create',);
                            }

                            // produit_admin_batch
                            if ('/admin/myscentfactory/msf/produit/batch' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::batchAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_batch',  '_route' => 'produit_admin_batch',);
                            }

                            // produit_admin_edit
                            if (preg_match('#^/admin/myscentfactory/msf/produit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::editAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_edit',));
                            }

                            // produit_admin_delete
                            if (preg_match('#^/admin/myscentfactory/msf/produit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::deleteAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_delete',));
                            }

                            // produit_admin_show
                            if (preg_match('#^/admin/myscentfactory/msf/produit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::showAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_show',));
                            }

                            // produit_admin_export
                            if ('/admin/myscentfactory/msf/produit/export' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::exportAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_export',  '_route' => 'produit_admin_export',);
                            }

                            // produit_admin_produit
                            if ('/admin/myscentfactory/msf/produit/produit' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::produitAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_produit',  '_route' => 'produit_admin_produit',);
                            }

                            // produit_admin_view
                            if (preg_match('#^/admin/myscentfactory/msf/produit/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::viewAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_view',));
                            }

                            // produit_admin_update_action
                            if (preg_match('#^/admin/myscentfactory/msf/produit/(?P<id>[^/]++)/update_action$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_produit_admin_update_action;
                                }

                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'produit_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\ProduitCRUDController::updateActionAction',  '_sonata_admin' => 'admin.produit',  '_sonata_name' => 'produit_admin_update_action',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$scheme])) {
                                    return array_replace($ret, $this->redirect($rawPathinfo, 'produit_admin_update_action', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_produit_admin_update_action:

                        }

                        elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/personnalisation')) {
                            // admin_myscentfactory_msf_personnalisation_list
                            if ('/admin/myscentfactory/msf/personnalisation/list' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::listAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_list',  '_route' => 'admin_myscentfactory_msf_personnalisation_list',);
                            }

                            // admin_myscentfactory_msf_personnalisation_create
                            if ('/admin/myscentfactory/msf/personnalisation/create' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::createAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_create',  '_route' => 'admin_myscentfactory_msf_personnalisation_create',);
                            }

                            // admin_myscentfactory_msf_personnalisation_batch
                            if ('/admin/myscentfactory/msf/personnalisation/batch' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::batchAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_batch',  '_route' => 'admin_myscentfactory_msf_personnalisation_batch',);
                            }

                            // admin_myscentfactory_msf_personnalisation_edit
                            if (preg_match('#^/admin/myscentfactory/msf/personnalisation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_personnalisation_edit')), array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::editAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_edit',));
                            }

                            // admin_myscentfactory_msf_personnalisation_delete
                            if (preg_match('#^/admin/myscentfactory/msf/personnalisation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_personnalisation_delete')), array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::deleteAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_delete',));
                            }

                            // admin_myscentfactory_msf_personnalisation_show
                            if (preg_match('#^/admin/myscentfactory/msf/personnalisation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_personnalisation_show')), array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::showAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_show',));
                            }

                            // admin_myscentfactory_msf_personnalisation_export
                            if ('/admin/myscentfactory/msf/personnalisation/export' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::exportAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_export',  '_route' => 'admin_myscentfactory_msf_personnalisation_export',);
                            }

                            // admin_myscentfactory_msf_personnalisation_customisation
                            if ('/admin/myscentfactory/msf/personnalisation/customisation' === $pathinfo) {
                                return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::customisationAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_customisation',  '_route' => 'admin_myscentfactory_msf_personnalisation_customisation',);
                            }

                            // admin_myscentfactory_msf_personnalisation_view
                            if (preg_match('#^/admin/myscentfactory/msf/personnalisation/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_personnalisation_view')), array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::viewAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_view',));
                            }

                            // admin_myscentfactory_msf_personnalisation_update_action
                            if (preg_match('#^/admin/myscentfactory/msf/personnalisation/(?P<id>[^/]++)/custom\\-action$#s', $pathinfo, $matches)) {
                                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                    $allow = array_merge($allow, array('GET', 'POST'));
                                    goto not_admin_myscentfactory_msf_personnalisation_update_action;
                                }

                                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_personnalisation_update_action')), array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::updateActionAction',  '_sonata_admin' => 'admin.personalisation',  '_sonata_name' => 'admin_myscentfactory_msf_personnalisation_update_action',));
                                $requiredSchemes = array (  'https' => 0,);
                                if (!isset($requiredSchemes[$scheme])) {
                                    return array_replace($ret, $this->redirect($rawPathinfo, 'admin_myscentfactory_msf_personnalisation_update_action', key($requiredSchemes)));
                                }

                                return $ret;
                            }
                            not_admin_myscentfactory_msf_personnalisation_update_action:

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/categories')) {
                        // categories_admin_list
                        if ('/admin/myscentfactory/msf/categories/list' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::listAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_list',  '_route' => 'categories_admin_list',);
                        }

                        // categories_admin_create
                        if ('/admin/myscentfactory/msf/categories/create' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::createAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_create',  '_route' => 'categories_admin_create',);
                        }

                        // categories_admin_batch
                        if ('/admin/myscentfactory/msf/categories/batch' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::batchAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_batch',  '_route' => 'categories_admin_batch',);
                        }

                        // categories_admin_edit
                        if (preg_match('#^/admin/myscentfactory/msf/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::editAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_edit',));
                        }

                        // categories_admin_delete
                        if (preg_match('#^/admin/myscentfactory/msf/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::deleteAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_delete',));
                        }

                        // categories_admin_show
                        if (preg_match('#^/admin/myscentfactory/msf/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::showAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_show',));
                        }

                        // categories_admin_export
                        if ('/admin/myscentfactory/msf/categories/export' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::exportAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_export',  '_route' => 'categories_admin_export',);
                        }

                        // categories_admin_categorie
                        if ('/admin/myscentfactory/msf/categories/categorie' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::categorieAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_categorie',  '_route' => 'categories_admin_categorie',);
                        }

                        // categories_admin_view
                        if (preg_match('#^/admin/myscentfactory/msf/categories/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::viewAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_view',));
                        }

                        // categories_admin_update_action
                        if (preg_match('#^/admin/myscentfactory/msf/categories/(?P<id>[^/]++)/update_action$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_categories_admin_update_action;
                            }

                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'categories_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\CategoriesCRUDController::updateActionAction',  '_sonata_admin' => 'admin.categories',  '_sonata_name' => 'categories_admin_update_action',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$scheme])) {
                                return array_replace($ret, $this->redirect($rawPathinfo, 'categories_admin_update_action', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_categories_admin_update_action:

                    }

                    elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/commentpost')) {
                        // admin_myscentfactory_msf_commentpost_list
                        if ('/admin/myscentfactory/msf/commentpost/list' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::listAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_list',  '_route' => 'admin_myscentfactory_msf_commentpost_list',);
                        }

                        // admin_myscentfactory_msf_commentpost_create
                        if ('/admin/myscentfactory/msf/commentpost/create' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::createAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_create',  '_route' => 'admin_myscentfactory_msf_commentpost_create',);
                        }

                        // admin_myscentfactory_msf_commentpost_batch
                        if ('/admin/myscentfactory/msf/commentpost/batch' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::batchAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_batch',  '_route' => 'admin_myscentfactory_msf_commentpost_batch',);
                        }

                        // admin_myscentfactory_msf_commentpost_edit
                        if (preg_match('#^/admin/myscentfactory/msf/commentpost/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_commentpost_edit')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::editAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_edit',));
                        }

                        // admin_myscentfactory_msf_commentpost_delete
                        if (preg_match('#^/admin/myscentfactory/msf/commentpost/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_commentpost_delete')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::deleteAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_delete',));
                        }

                        // admin_myscentfactory_msf_commentpost_show
                        if (preg_match('#^/admin/myscentfactory/msf/commentpost/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_myscentfactory_msf_commentpost_show')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::showAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_show',));
                        }

                        // admin_myscentfactory_msf_commentpost_export
                        if ('/admin/myscentfactory/msf/commentpost/export' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::exportAction',  '_sonata_admin' => 'admin.avis',  '_sonata_name' => 'admin_myscentfactory_msf_commentpost_export',  '_route' => 'admin_myscentfactory_msf_commentpost_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/myscentfactory/msf/mediauploads')) {
                        // media_admin_list
                        if ('/admin/myscentfactory/msf/mediauploads/list' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::listAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_list',  '_route' => 'media_admin_list',);
                        }

                        // media_admin_create
                        if ('/admin/myscentfactory/msf/mediauploads/create' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::createAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_create',  '_route' => 'media_admin_create',);
                        }

                        // media_admin_batch
                        if ('/admin/myscentfactory/msf/mediauploads/batch' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::batchAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_batch',  '_route' => 'media_admin_batch',);
                        }

                        // media_admin_edit
                        if (preg_match('#^/admin/myscentfactory/msf/mediauploads/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::editAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_edit',));
                        }

                        // media_admin_delete
                        if (preg_match('#^/admin/myscentfactory/msf/mediauploads/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::deleteAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_delete',));
                        }

                        // media_admin_show
                        if (preg_match('#^/admin/myscentfactory/msf/mediauploads/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_admin_show')), array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::showAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_show',));
                        }

                        // media_admin_export
                        if ('/admin/myscentfactory/msf/mediauploads/export' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::exportAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_export',  '_route' => 'media_admin_export',);
                        }

                        // media_admin_mediaUploads
                        if ('/admin/myscentfactory/msf/mediauploads/mediaUploads' === $pathinfo) {
                            return array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::mediaUploadsAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_mediaUploads',  '_route' => 'media_admin_mediaUploads',);
                        }

                        // media_admin_view
                        if (preg_match('#^/admin/myscentfactory/msf/mediauploads/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_admin_view')), array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::viewAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_view',));
                        }

                        // media_admin_update_action
                        if (preg_match('#^/admin/myscentfactory/msf/mediauploads/(?P<id>[^/]++)/update_action$#s', $pathinfo, $matches)) {
                            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                                $allow = array_merge($allow, array('GET', 'POST'));
                                goto not_media_admin_update_action;
                            }

                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'media_admin_update_action')), array (  '_controller' => 'AppBundle\\Controller\\MediaCRUDController::updateActionAction',  '_sonata_admin' => 'admin.medias',  '_sonata_name' => 'media_admin_update_action',));
                            $requiredSchemes = array (  'https' => 0,);
                            if (!isset($requiredSchemes[$scheme])) {
                                return array_replace($ret, $this->redirect($rawPathinfo, 'media_admin_update_action', key($requiredSchemes)));
                            }

                            return $ret;
                        }
                        not_media_admin_update_action:

                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/avis')) {
            // deposer_avis
            if (preg_match('#^/avis/(?P<avis>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deposer_avis')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostController::createAction',));
            }

            // afficher_avis
            if (preg_match('#^/avis/(?P<avis>[^/]++)/commentaires$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_afficher_avis;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficher_avis')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostController::getCommentsAction',));
            }
            not_afficher_avis:

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/login')) {
                // fos_user_security_check
                if ('/user/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

                // fos_user_security_login
                if ('/user/login' === $pathinfo) {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_method' => 'POST',  '_route' => 'fos_user_security_login',);
                }

            }

            // fos_user_security_logout
            if ('/user/logout' === $pathinfo) {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_method' => 'POST',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/user/user/re')) {
                // fos_user_registered_login
                if ('/user/user/relogin' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\RegisteredSecurityController::loginAction',  '_method' => 'POST',  '_route' => 'fos_user_registered_login',);
                }

                if (0 === strpos($pathinfo, '/user/user/register')) {
                    // fos_user_registration_register
                    if ('/user/user/register' === $trimmedPathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_registration_register;
                        }

                        $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                        if (substr($pathinfo, -1) !== '/') {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                        }

                        return $ret;
                    }
                    not_fos_user_registration_register:

                    // fos_user_registration_check_email
                    if ('/user/user/register/check-email' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/user/user/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/user/user/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/user/user/register/confirmed' === $pathinfo) {
                            if ('GET' !== $canonicalMethod) {
                                $allow[] = 'GET';
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

                elseif (0 === strpos($pathinfo, '/user/user/resetting')) {
                    // fos_user_resetting_request
                    if ('/user/user/resetting/request' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_resetting_request;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                    }
                    not_fos_user_resetting_request:

                    // fos_user_resetting_reset
                    if (0 === strpos($pathinfo, '/user/user/resetting/reset') && preg_match('#^/user/user/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_fos_user_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                    }
                    not_fos_user_resetting_reset:

                    // fos_user_resetting_send_email
                    if ('/user/user/resetting/send-email' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_fos_user_resetting_send_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    }
                    not_fos_user_resetting_send_email:

                    // fos_user_resetting_check_email
                    if ('/user/user/resetting/check-email' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_resetting_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    }
                    not_fos_user_resetting_check_email:

                }

            }

            elseif (0 === strpos($pathinfo, '/user/user/profile')) {
                // fos_user_profile_show
                if ('/user/user/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    $ret = array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/user/user/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/user/user/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

            elseif (0 === strpos($pathinfo, '/user/espace_client')) {
                // information_client
                if ('/user/espace_client/espace_client/information' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\EspaceClientController::editAction',  '_route' => 'information_client',);
                }

                // profile_client
                if (preg_match('#^/user/espace_client/(?P<profile_client>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_profile_client;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_client')), array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\EspaceClientController::showClientProfileAction',));
                }
                not_profile_client:

                // test
                if (0 === strpos($pathinfo, '/user/espace_client/test_profile') && preg_match('#^/user/espace_client/test_profile/(?P<client>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'test')), array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\EspaceClientController::testAction',));
                }

                // login_client
                if ('/user/espace_client/session' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\UserController::accesAction',  '_route' => 'login_client',);
                }

                // mailer
                if ('/user/espace_client/swiftMailer/{$user}' === $pathinfo) {
                    return array (  '_controller' => 'MyScentFactory\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'mailer',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            // blog_home
            if ('/blog' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BlogController::BlogAction',  '_route' => 'blog_home',);
            }

            // blog_article
            if (0 === strpos($pathinfo, '/blog/Article') && preg_match('#^/blog/Article/(?P<articleId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_article')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::BlogArticleAction',));
            }

            if (0 === strpos($pathinfo, '/blog/avis')) {
                // blog_avis
                if ('/blog/avis' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::avisAction',  '_route' => 'blog_avis',);
                }

                // comment_article
                if (0 === strpos($pathinfo, '/blog/avis/Article') && preg_match('#^/blog/avis/Article/(?P<articleId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_article')), array (  '_controller' => 'AppBundle\\Controller\\CommentPostCRUDController::CommentArticleAction',));
                }

            }

        }

        // client_home
        if ('/client' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ClientCRUDController::UpdateAction',  '_route' => 'client_home',);
        }

        if (0 === strpos($pathinfo, '/composition')) {
            // view_composition
            if ('/composition/view' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CompositionAdminController::viewCompositionAction',  '_route' => 'view_composition',);
            }

            // create_composition
            if ('/composition/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CompositionAdminController::createCompositionAction',  '_route' => 'create_composition',);
            }

            // update_composition
            if (0 === strpos($pathinfo, '/composition/update') && preg_match('#^/composition/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_composition')), array (  '_controller' => 'AppBundle\\Controller\\CompositionAdminController::updateCompositionAction',));
            }

            // show_composition
            if (0 === strpos($pathinfo, '/composition/show') && preg_match('#^/composition/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_composition')), array (  '_controller' => 'AppBundle\\Controller\\CompositionAdminController::showCompositionAction',));
            }

            // delete_Composition
            if (0 === strpos($pathinfo, '/composition/delete') && preg_match('#^/composition/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_Composition')), array (  '_controller' => 'AppBundle\\Controller\\CompositionAdminController::deleteCompositionAction',));
            }

        }

        // code_promo
        if (0 === strpos($pathinfo, '/panier/code_promo') && preg_match('#^/panier/code_promo/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'code_promo')), array (  '_controller' => 'AppBundle\\Controller\\CodePromoController::CodePromoAction',));
        }

        // customisation
        if ('/personnalisation' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonnalisationCRUDController::UpdateAction',  '_route' => 'customisation',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
