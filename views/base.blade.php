<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="'viewport" content="device-width", initial-scale="1">
    <title>@yield('browsertitle')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/styles.css">
    @yield('css')
</head>

<body>
@include ('topnav')
@yield('outsidecontainer')



<div class="container">
    <div class="row">
        <br><br><br><br>
        @include('errormessage')
    </div>
    <div class="row">
        <div class="col-md-12 push-down">
            @yield('content')
        </div>
    </div>

</div>
<footer class="footer">
    <div class="row footer-background">
        <div class="col-md-3 ">
            <div class="padding-left">
                <h4>Contact Us</h4>
                123 Main Av.<br>
                Gruntsville, NY<br>
                040404<br>
                +1 (555) 555-5555
            </div>
        </div>
        <div class="col-md-6">what</div>
        <div class="col-md-3"><img src="/assets/map.png" alt="" class="pull-right"></div>
    </div>
</footer>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@if((Acme\Auth\LoggedIn::user()) && (Acme\Auth\LoggedIn::user()->access_level == 2))
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.6.2/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js.map"></script>
@endif
@yield('bottomjs')
@include('admin.admin-js')

</body>

</html>