<?php
namespace Acme\controllers;

use duncan3dc\Laravel\BladeInstance;
use Acme\Validation\Validator;
use Acme\models\Testimonial;
use Acme\Auth\LoggedIn;

class TestimonialController extends BaseController
{
    public function getShowTestimonials()
    {
        $testimonials = Testimonial::all();
        echo $this->blade->render('testimonials', [
            'testimonials'=>$testimonials,
        ]);
    }


    public function getShowAdd()
    {
        echo $this->blade->render('add-testimonial');
    }

    public function postShowAdd()
    {
        $errors=[];
        $validation_data = [
            'title'=>"min:3",
            'testimonial' =>"min:10",

        ];

//validate data
        $validator = new Validator();
        $errors = $validator->isValid($validation_data);
//
        if(sizeof($errors)>0)
        {
            $_SESSION['msg'] = $errors;
//            header("Location:/register");
            echo $this->blade->render('add-testimonial');
            unset($_SESSION['msg']);
            exit();
        }
        $testimonial = new Testimonial;
        $testimonial->title = $_REQUEST['title'];
        $testimonial->testimonial = $_REQUEST['testimonial'];
        $testimonial->user_id = LoggedIn::user()->id;
        $testimonial->save();

        header("Location:/testimonial-saved");
        exit();
    }
}
