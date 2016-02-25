@extends('layout.master')

@section('content')
    <section class="slice bg-3 pg_register" ng-controller="UserController as uc">
        <div class="w-section inverse">
            <div class="container">
                <div class="alert alert-block alert-danger hide">
                    <a class="close" data-dismiss="alert" href="#">x</a>
                    <h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Check validation!</h4>

                    <p>
                        You may also check the form validation by clicking on the form action button. Please try and see
                        the results below!
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h2>Welcome to Boomerang Bootstrap Template</h2>

                            <p style="font-size:16px;">
                                Create your own account and explore more.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">

                                <div class="form-header">
                                    <h2>Create your own account</h2>
                                </div>
                                <div class="form-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget dolor. Aenean massa.
                                    </p>
                                    <div ng-include src="'views/register.html'"></div>

                                </div>
                                <div class="form-footer">
                                    <p>Already have an account? <a href="/login">Click here to sign in.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@stop