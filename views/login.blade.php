@extends('base')

@section('browsertitle')
    Project: Login
@stop

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1>Log In</h1>


        <form id='login' class='form-horizontal' name='login' action="login" method='post' >
            <div class="form-group">
                <label for="username" class='col-sm-2 control-label'>Username</label>
                <div class="col-sm-10">
                    <input type="text" class='form-control' id='first_name' name='username' placeholder='username'>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class='col-sm-2 control-label'>Password</label>
                <div class="col-sm-10">
                    <input type="password" class='form-control' id='password' name='password' placeholder='Password'>
                </div>
            </div>

            <hr>
            <div class="form-group">
                <div class="col-sm-offset-2 colsm-10">
                    <button type='submit' name='submit' class='btn btn-primary'>Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
