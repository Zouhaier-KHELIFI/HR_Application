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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/absence')) {
            // absence_index
            if ('/absence' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\AbsenceController::indexAction',  '_route' => 'absence_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_absence_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'absence_index'));
                }

                return $ret;
            }
            not_absence_index:

            // absence_new
            if ('/absence/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AbsenceController::newAction',  '_route' => 'absence_new',);
            }

            // absence_show
            if (preg_match('#^/absence/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_show')), array (  '_controller' => 'AppBundle\\Controller\\AbsenceController::showAction',));
            }

            // absence_edit
            if (preg_match('#^/absence/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_edit')), array (  '_controller' => 'AppBundle\\Controller\\AbsenceController::editAction',));
            }

            // absence_delete
            if (preg_match('#^/absence/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'absence_delete')), array (  '_controller' => 'AppBundle\\Controller\\AbsenceController::deleteAction',));
            }

        }

        // app_candidate_candidature
        if (0 === strpos($pathinfo, '/addcandidature') && preg_match('#^/addcandidature(?:/(?P<personne>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_candidate_candidature')), array (  'personne' => NULL,  '_controller' => 'AppBundle\\Controller\\CandidateController::candidatureAction',));
        }

        // app_candidate_updateindex
        if (0 === strpos($pathinfo, '/updatecandidature') && preg_match('#^/updatecandidature(?:/(?P<personne>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_candidate_updateindex')), array (  'personne' => NULL,  '_controller' => 'AppBundle\\Controller\\CandidateController::updateindexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // ListUser
            if ('/user' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\userController::listAction',  '_route' => 'ListUser',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_ListUser;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ListUser'));
                }

                return $ret;
            }
            not_ListUser:

            // profile_update
            if (0 === strpos($pathinfo, '/user/update_user') && preg_match('#^/user/update_user(?:/(?P<personne>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile_update')), array (  'personne' => NULL,  '_controller' => 'AppBundle\\Controller\\userController::updateindexAction',));
            }

            // app_user_addindex
            if (0 === strpos($pathinfo, '/user/add') && preg_match('#^/user/add(?:/(?P<personne>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_addindex')), array (  'personne' => NULL,  '_controller' => 'AppBundle\\Controller\\userController::addindexAction',));
            }

            // homepage
            if ('/user/abs' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\userController::indexAbsenceAction',  '_route' => 'homepage',);
            }

            // app_user_deleteindex
            if (0 === strpos($pathinfo, '/user/deleteuser') && preg_match('#^/user/deleteuser(?:/(?P<user>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_user_deleteindex')), array (  'user' => NULL,  '_controller' => 'AppBundle\\Controller\\userController::deleteindexAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            // listingcandidate
            if ('/listcandidate' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CandidateController::listAction',  '_route' => 'listingcandidate',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        elseif (0 === strpos($pathinfo, '/de')) {
            // app_candidate_deleteindex
            if (0 === strpos($pathinfo, '/deletecandidature') && preg_match('#^/deletecandidature(?:/(?P<candidature>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_candidate_deleteindex')), array (  'candidature' => NULL,  '_controller' => 'AppBundle\\Controller\\CandidateController::deleteindexAction',));
            }

            if (0 === strpos($pathinfo, '/demand')) {
                // demandeditor
                if (0 === strpos($pathinfo, '/demand/edit') && preg_match('#^/demand/edit(?:/(?P<demande>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'demandeditor')), array (  'demande' => NULL,  '_controller' => 'AppBundle\\Controller\\DemandController::indexAction',));
                }

                // demandlisting
                if ('/demand' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\DemandController::listAction',  '_route' => 'demandlisting',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_demandlisting;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'demandlisting'));
                    }

                    return $ret;
                }
                not_demandlisting:

            }

            elseif (0 === strpos($pathinfo, '/departement')) {
                // departement_index
                if ('/departement' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\DepartementController::indexAction',  '_route' => 'departement_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_departement_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'departement_index'));
                    }

                    return $ret;
                }
                not_departement_index:

                // departement_new
                if ('/departement/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartementController::newAction',  '_route' => 'departement_new',);
                }

                // departement_show
                if (preg_match('#^/departement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_show')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::showAction',));
                }

                // departement_edit
                if (preg_match('#^/departement/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_edit')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::editAction',));
                }

                // departement_delete
                if (preg_match('#^/departement/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_delete')), array (  '_controller' => 'AppBundle\\Controller\\DepartementController::deleteAction',));
                }

            }

        }

        // app_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_app_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_default_index'));
            }

            return $ret;
        }
        not_app_default_index:

        if (0 === strpos($pathinfo, '/event')) {
            // eventadd
            if (0 === strpos($pathinfo, '/event/addevent') && preg_match('#^/event/addevent(?:/(?P<event>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eventadd')), array (  'event' => NULL,  '_controller' => 'AppBundle\\Controller\\EvenementController::addoffreAction',));
            }

            // app_evenement_updateoffre
            if (0 === strpos($pathinfo, '/event/updateevent') && preg_match('#^/event/updateevent(?:/(?P<event>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_evenement_updateoffre')), array (  'event' => NULL,  '_controller' => 'AppBundle\\Controller\\EvenementController::updateoffreAction',));
            }

            // listing
            if ('/event' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\EvenementController::listAction',  '_route' => 'listing',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_listing;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'listing'));
                }

                return $ret;
            }
            not_listing:

            // app_evenement_displayevent
            if (0 === strpos($pathinfo, '/event/display') && preg_match('#^/event/display/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_evenement_displayevent')), array (  '_controller' => 'AppBundle\\Controller\\EvenementController::displayEventAction',));
            }

            // app_evenement_deleteindex
            if (0 === strpos($pathinfo, '/event/deleteevent') && preg_match('#^/event/deleteevent(?:/(?P<event>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_evenement_deleteindex')), array (  'event' => NULL,  '_controller' => 'AppBundle\\Controller\\EvenementController::deleteindexAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/rating')) {
                // rating_index
                if ('/rating' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'AppBundle\\Controller\\RatingController::indexAction',  '_route' => 'rating_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_rating_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'rating_index'));
                    }

                    return $ret;
                }
                not_rating_index:

                // rating_new
                if ('/rating/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\RatingController::newAction',  '_route' => 'rating_new',);
                }

                // rating_show
                if (preg_match('#^/rating/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating_show')), array (  '_controller' => 'AppBundle\\Controller\\RatingController::showAction',));
                }

                // rating_edit
                if (preg_match('#^/rating/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating_edit')), array (  '_controller' => 'AppBundle\\Controller\\RatingController::editAction',));
                }

                // rating_delete
                if (preg_match('#^/rating/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating_delete')), array (  '_controller' => 'AppBundle\\Controller\\RatingController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        // email
        if ('/mail' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\mailingController::MailAction',  '_route' => 'email',);
        }

        if (0 === strpos($pathinfo, '/offre')) {
            // addoffre
            if (0 === strpos($pathinfo, '/offre/addoffre') && preg_match('#^/offre/addoffre(?:/(?P<offre>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'addoffre')), array (  'offre' => NULL,  '_controller' => 'AppBundle\\Controller\\offreController::addoffreAction',));
            }

            // app_offre_updateoffre
            if (0 === strpos($pathinfo, '/offre/updateoffre') && preg_match('#^/offre/updateoffre(?:/(?P<offre>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_offre_updateoffre')), array (  'offre' => NULL,  '_controller' => 'AppBundle\\Controller\\offreController::updateoffreAction',));
            }

            // listingoffre
            if ('/offre' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\offreController::listAction',  '_route' => 'listingoffre',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_listingoffre;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'listingoffre'));
                }

                return $ret;
            }
            not_listingoffre:

            // app_offre_deleteindex
            if (0 === strpos($pathinfo, '/offre/deleteoffre') && preg_match('#^/offre/deleteoffre(?:/(?P<offre>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_offre_deleteindex')), array (  'offre' => NULL,  '_controller' => 'AppBundle\\Controller\\offreController::deleteindexAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
