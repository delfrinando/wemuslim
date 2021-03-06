@extends('layouts.subdefault')
@section('content')

        <!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="container">
                                <div class="row">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">{{ $user->first_name }}</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3 col-lg-3 " align="center"><img
                                                            alt="User Pic"
                                                            src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png"
                                                            class="img-circle img-responsive"></div>
                                                <div class=" col-md-9 col-lg-9 ">
                                                    <table class="table table-user-information">
                                                        <tbody>
                                                        <tr>
                                                            <td>Department:</td>
                                                            <td>Programming</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td><a href="{{ $user->email }}">{{ $user->email }}</a></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>

                                                    {{--<a href="#" class="btn btn-primary">My Sales Performance</a>--}}
                                                    {{--<a href="#" class="btn btn-primary">Team Sales--}}
                                                    {{--Performance</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="panel-footer">--}}
                                        {{--<a data-original-title="Broadcast Message" data-toggle="tooltip"--}}
                                        {{--type="button" class="btn btn-sm btn-primary"><i--}}
                                        {{--class="glyphicon glyphicon-envelope"></i></a>--}}
                                        {{--<span class="pull-right">--}}
                                        {{--<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button"--}}
                                        {{--class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>--}}
                                        {{--<a data-original-title="Remove this user" data-toggle="tooltip" type="button"--}}
                                        {{--class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>--}}
                                        {{--</span>--}}
                                    </div>

                                </div>
                            </div>
                        </div>
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