@extends('website.master')
@section('title')
    Contact Page
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary ">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-black">Contact with Us</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-body h-100 shadow">
                        <h1 class="text-center">Send Message</h1>
                        <hr/>
                        <form action="" method="" enctype="multipart/form-data">
                            @csrf
                            <div class="row py-5">
                            <div class="col-md-6 row mb-3 ms-2">
                                    <input type="email" class="form-control" name="Name" placeholder="Name">
                                </div>

                            <div class="col-md-6 row mb-3 ms-2">

                                    <input type="email" class="form-control" name="Email" placeholder="Email">

                            </div>
                            </div>
                            <div class="row mb-3 ms-2">


                                   <textarea class="form-control" name="message" placeholder="Message"></textarea>

                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">


                            <div class="card card-body h-100">
                                <h1 class="text-center">Contact with Us</h1>
                                <hr/>
                                <address>

                                    House # 420, Road # 48, Mohammadpur,Dhaka<br/>
                                    <b>Phone:</b> 01757752412<br/>
                                    <b>Email:</b> kaium.swe@gmail.com
                                </address>
                                <ul class="nav">
                                    <li><a href="" class="nav-link"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="" class="nav-link"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="" class="nav-link"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="" class="nav-link"><i class="fab fa-instagram-square"></i></a></li>
                                </ul>
                            </div>
                    </div>
                </div>

            </div>


    </section>

    <section class="py-5">
        <div class="container">
            <div class="card card-body">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14607.610760834354!2d90.40275355!3d23.750849249999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1662531830169!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
