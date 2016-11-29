@extends('layouts.subdefault')
@section('content')

        <!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area" style="padding: 50px 0px 100px 0px">
                    <div class="row">
                        @if($errors->any())
                            <div class="alert alert-warning alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <strong>Warning! </strong>{{ $errors->first() }}
                            </div>
                        @endif
                        <br>

                        <div class="col-md-6">
                            <div class="aa-myaccount-login">
                                <h4>Login</h4>

                                <form class="aa-login-form" method="POST" action="{{ url('/account/login') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <label for="">Email<span>*</span></label>
                                    <input type="text" name="login_email" placeholder="Email">
                                    <label for="">Password<span>*</span></label>
                                    <input type="password" name="login_password" placeholder="Password">
                                    <button type="submit" class="aa-browse-btn">Login</button>
                                    <label class="rememberme" for="rememberme"><input type="checkbox"
                                                                                      id="rememberme">
                                        Remember me </label>

                                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Register</h4>

                                <form class="aa-login-form" method="POST"
                                      action="{{ url('/account/register') }}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <label for="">Name<span>*</span></label>
                                    <input type="text" name="register_name" placeholder="Name">
                                    <label for="">Email address<span>*</span></label>
                                    <input type="text" name="register_email" placeholder="Email">
                                    <label for="">Password<span>*</span></label>
                                    <input type="password" name="register_password" placeholder="Password">
                                    <button type="submit" class="aa-browse-btn">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->


@stop