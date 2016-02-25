@extends('layout.master')

@section('content')
    <section class="slice bg-3">
        <div class="w-section inverse">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                        <div class="w-section inverse">
                            <div class="w-box sign-in-wr bg-5">

                                <div class="form-header">
                                    <h2>Please, sign in to your account {!!$aData['pagename']!!}</h2>
                                </div>
                                <div class="form-body">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                    </p>
                                    <form role="form" class="form-light padding-15">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="txtEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" id="txtPassword" placeholder="Password">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="checkbox"><input type="checkbox"> Remember me</label>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-two pull-right">Sign In</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="form-footer">
                                    <p>Lost your password? <a href="#">Click here to recover.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop