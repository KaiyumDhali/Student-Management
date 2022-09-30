@extends('website.master')
@section('title')
   Login / Registration
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary ">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-black">Login or registration Form</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                    <h1>Login Form</h1>
                        <hr/>
                        <form>
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1>Registration Form</h1>
                        <hr/>
                        <form>
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mobile">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
