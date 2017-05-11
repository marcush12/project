<?php


//register routes
$router->map('GET', '/register', 'Acme\controllers\RegisterController@getShowRegisterPage', 'register');
$router->map('POST', '/register', 'Acme\controllers\RegisterController@postShowRegisterPage', 'register_post');
$router->map('GET', '/verify-account', 'Acme\controllers\RegisterController@getVerifyAccount', 'verify_account');

//testimonial routes
$router->map('GET', '/testimonials', 'Acme\controllers\TestimonialController@getShowTestimonials', 'testimonials');


//only logged in user routes  protected
If(Acme\Auth\LoggedIn::user()) {
    $router->map('GET', '/add-testimonial', 'Acme\controllers\TestimonialController@getShowAdd', 'add_testimonial');
    $router->map('POST', '/add-testimonial', 'Acme\controllers\TestimonialController@postShowAdd', 'add_testimonial_post');
}
//login/logout routes
$router->map('GET', '/login', 'Acme\controllers\AuthenticationController@getShowLoginPage', 'login');
$router->map('GET', '/logout', 'Acme\controllers\AuthenticationController@getLogout', 'logout');
$router->map('POST', '/login', 'Acme\controllers\AuthenticationController@postShowLoginPage', 'login_post');
$router->map('GET', '/page-not-found', 'Acme\controllers\PageController@getShow404', '404');

//admin routes
if((Acme\Auth\LoggedIn::user()) && (Acme\Auth\LoggedIn::user()->access_level == 2)){
    $router->map('POST', '/admin/page/edit', 'Acme\controllers\AdminController@postSavePage', 'save_page');
    $router->map('GET', '/admin/page/add', 'Acme\controllers\AdminController@getAddPage', 'add_page');
}


//pages routes
$router->map('GET', '/', 'Acme\controllers\PageController@getShowHomePage', 'home');
$router->map('GET', '/[*]', 'Acme\controllers\PageController@getShowPage', 'generic_page');



//$router->map('GET', '/slug', function(){
//    $slug = new Cocur\Slugify\Slugify();
//    echo $slug->slugify('About Acme');
//});



