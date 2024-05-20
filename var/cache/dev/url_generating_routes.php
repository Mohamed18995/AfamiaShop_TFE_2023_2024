<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '2fa_login' => [[], ['_controller' => 'scheb_two_factor.form_controller::form'], [], [['text', '/2fa']], [], [], []],
    '2fa_login_check' => [[], [], [], [['text', '/2fa_check']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/account']], [], [], []],
    'app_account_address' => [[], ['_controller' => 'App\\Controller\\AccountController::indexAddress'], [], [['text', '/account-address']], [], [], []],
    'app_account_orders' => [[], ['_controller' => 'App\\Controller\\AccountController::accountOrders'], [], [['text', '/orders']], [], [], []],
    'change_profile' => [[], ['_controller' => 'App\\Controller\\AccountController::changeProfile'], [], [['text', '/account/profile/change']], [], [], []],
    'change_password' => [[], ['_controller' => 'App\\Controller\\AccountController::changePassword'], [], [['text', '/account/password/change']], [], [], []],
    'order_details' => [['reference'], ['_controller' => 'App\\Controller\\AccountController::detailsOrder'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/details']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\Account\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\Account\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\Account\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'address_index' => [[], ['_controller' => 'App\\Controller\\AddressController::index'], [], [['text', '/address/']], [], [], []],
    'address_new' => [[], ['_controller' => 'App\\Controller\\AddressController::new'], [], [['text', '/address/new']], [], [], []],
    'address_show' => [['id'], ['_controller' => 'App\\Controller\\AddressController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], [], []],
    'address_edit' => [['id'], ['_controller' => 'App\\Controller\\AddressController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], [], []],
    'address_delete' => [['id'], ['_controller' => 'App\\Controller\\AddressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/address']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin-m']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_api_api_order' => [[], ['_controller' => 'App\\Controller\\Api\\ApiOrderController::update'], [], [['text', '/api/order']], [], [], []],
    'app_stripe_payment-intent' => [['orderId'], ['_controller' => 'App\\Controller\\Api\\ApiStripeController::index'], [], [['variable', '/', '[^/]++', 'orderId', true], ['text', '/api/stripe/payment-intent']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'app_add_to_cart' => [['productId', 'count'], ['count' => 1, '_controller' => 'App\\Controller\\CartController::addToCart'], [], [['variable', '/', '[^/]++', 'count', true], ['variable', '/', '[^/]++', 'productId', true], ['text', '/cart/add']], [], [], []],
    'app_remove_to_cart' => [['productId', 'count'], ['count' => 1, '_controller' => 'App\\Controller\\CartController::removeToCart'], [], [['variable', '/', '[^/]++', 'count', true], ['variable', '/', '[^/]++', 'productId', true], ['text', '/cart/remove']], [], [], []],
    'app_get_cart' => [[], ['_controller' => 'App\\Controller\\CartController::getCart'], [], [['text', '/cart/get']], [], [], []],
    'show_category' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/category']], [], [], []],
    'app_category' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/category']], [], [], []],
    'order_create' => [[], ['_controller' => 'App\\Controller\\CheckoutController::index'], [], [['text', '/order/create']], [], [], []],
    'order_prepare' => [[], ['_controller' => 'App\\Controller\\CheckoutController::prepareOrder'], [], [['text', '/order/verify']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], [], []],
    'checkouttttt' => [[], ['_controller' => 'App\\Controller\\DeliveryAddressController::index'], [], [['text', '/checkoutttt']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_search_result' => [['name', 'categorie', 'gendre', 'color'], ['_controller' => 'App\\Controller\\HomeController::search_result'], [], [['variable', '/', '[^/]++', 'color', true], ['variable', '/', '[^/]++', 'gendre', true], ['variable', '/', '[^/]++', 'categorie', true], ['variable', '/', '[^/]++', 'name', true], ['text', '/search']], [], [], []],
    'show' => [['name'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/product']], [], [], []],
    'produit_detail' => [['id'], ['_controller' => 'App\\Controller\\HomeController::detail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'change_locale' => [['locale'], ['_controller' => 'App\\Controller\\HomeController::changeLocale'], [], [['variable', '/', '[^/]++', 'locale', true], ['text', '/change-locale']], [], [], []],
    'terms_conditions' => [[], ['_controller' => 'App\\Controller\\HomeController::terms'], [], [['text', '/terms-conditions']], [], [], []],
    'app_newsletters' => [[], ['_controller' => 'App\\Controller\\NewslettersController::index'], [], [['text', '/newsletters']], [], [], []],
    'newsletters_confirm' => [['id', 'token'], ['_controller' => 'App\\Controller\\NewslettersController::confirm'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/newsletters/confirm']], [], [], []],
    'newsletters_prepare' => [[], ['_controller' => 'App\\Controller\\NewslettersController::prepare'], [], [['text', '/newsletters/prepare']], [], [], []],
    'newsletters_list' => [[], ['_controller' => 'App\\Controller\\NewslettersController::list'], [], [['text', '/newsletters/list']], [], [], []],
    'newsletters_send' => [['id'], ['_controller' => 'App\\Controller\\NewslettersController::send'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/newsletters/send']], [], [], []],
    'newsletters_unsubscribe' => [['id', 'newsletter', 'token'], ['_controller' => 'App\\Controller\\NewslettersController::unsubscribe'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'newsletter', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/newsletters/unsubscribe']], [], [], []],
    'check_email' => [[], ['_controller' => 'App\\Controller\\NewslettersController::checkEmail'], [], [['text', '/check-email']], [], [], []],
    'newsletter_subscription_confirm' => [[], ['_controller' => 'App\\Controller\\NewslettersController::subscriptionConfirm'], [], [['text', '/subscription_confirm']], [], [], []],
    'unsubscribe_newsletters' => [[], ['_controller' => 'App\\Controller\\NewslettersController::unsubscribeNewsletters'], [], [['text', '/unsubscribe_newsletters']], [], [], []],
    'payment_stripe' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/create-session-stripe']], [], [], []],
    'payment_success' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::stripeSuccess'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/success']], [], [], []],
    'payment_error' => [['reference'], ['_controller' => 'App\\Controller\\PaymentController::paymentcancel'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/order/error']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], [], []],
    'send_email_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::unsubscribeNewsletters'], [], [['text', '/send_email']], [], [], []],
    'confirm_after_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::confirmUserAfterEmail'], [], [['text', '/confirm_after_email']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\SearchController::search'], [], [['text', '/search']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_oauth_login' => [['service'], ['_controller' => 'App\\Controller\\SecurityController::connect'], [], [['variable', '/', '[^/]++', 'service', true], ['text', '/oauth/login']], [], [], []],
    'auth_oauth_check' => [['service'], ['_controller' => 'App\\Controller\\SecurityController::check'], [], [['variable', '/', '[^/]++', 'service', true], ['text', '/oauth/check']], [], [], []],
    'app_send_email' => [[], ['_controller' => 'App\\Controller\\SendEmailController::index'], [], [['text', '/send']], [], [], []],
    'app_shop' => [[], ['_controller' => 'App\\Controller\\ShopController::index'], [], [['text', '/shop']], [], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'search' => [[], [], [], [['text', '/search']], [], [], []],
];
