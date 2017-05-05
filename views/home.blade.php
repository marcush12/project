@extends('base')

@section('outsidecontainer')

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="assets/slider/1.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/slider/2.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item active">
                    <img src="assets/slider/3.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/slider/4.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>
                <div class="item">
                    <img src="assets/slider/5.jpg" alt="...">
                    <div class="carousel-caption">

                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @stop
        @section('content')
<div class="row">
    <div class="col-md-4 well text-center">
        <h3>About</h3>
        <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea non optio porro praesentium quas sunt
            totam veniam? At excepturi explicabo ipsa nam sunt ullam velit veritatis! A consectetur doloribus
            voluptas!</p>
    </div>
    <div class="col-md-4 well empty-well text-center">
        <h3>Tours</h3>
        <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam atque aut commodi deserunt, dolor,
            ducimus est expedita harum illo iure nisi nobis pariatur quam repellendus repudiandae vel vero
            voluptate?</p>
    </div>
    <div class="col-md-4 well text-center">
        <h3>Contact</h3>
        <span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"></span>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, deleniti distinctio doloremque
            earum facere incidunt quaerat quibusdam tempore. Cumque facere in labore laboriosam rerum sed. Commodi
            excepturi nulla sapiente sed!</p>
    </div>
    @stop
