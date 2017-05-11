@extends('base')

@section('browsertitle')
    Project: Login
@stop


@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>Log In</h1>


        <form id='loginform' class='form-horizontal' name='loginform' action="/login" method='post' >
            <input type="hidden" name="_token" value="{!! htmlspecialchars($signer->getSignature()) !!}">

            <div class="form-group">
                <label for="email" class='col-sm-2 control-label'>Email</label>
                <div class="col-sm-10">
                    <input type="email" class='form-control email required' id='email' name='email' placeholder='user@example.com'>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class='col-sm-2 control-label'>Password</label>
                <div class="col-sm-10">
                    <input type="password" class='form-control required' id='password' name='password' placeholder='Password'>
                </div>
            </div>

            <hr>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type='submit' name='submit' class='btn btn-primary'>Log In</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@section('bottomjs')
    <script>
        $(document).ready(function(){
            $('#loginform').validate();
        });
    </script>
    @stop
