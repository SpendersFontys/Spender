@extends('layouts.app')

@section('content')
    <section>
        <div class="sectionClass divImg">
            <div class="container text-center">
                <header>
                    <h2 class="color-white">Welcome to the Spenders contact page</h2>
                </header>
                <p class="color-white">We are here to help!</p>
            </div>
        </div>
    </section>

    <section class="bg-offwhite">
        <div class="container sectionClass">
            <header>
                <h2 class="text-center">How can we help?</h2>
            </header>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p class="text-center">
                        We know that reaching one person is just as important as reaching millions. Here, you’ll find answers to our most common questions and learn more about Spenders products.
                        Still have a burning question? We’re here to help.
                    </p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa fa-question-circle faContact" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-center">Frequently asked questions</h2>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa fa-download faContact" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-center">Updates</h2>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa fa-server faContact" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-center">Status Service</h2>
                    <p></p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lila">
        <div class="container sectionClass">
            <header>
                <h2 class="text-center">Contact us!</h2>
            </header>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p class="text-center">
                        We’re here to help with all of your Spenders products.
                    </p>
                </div>
            </div>

            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group text-center">
                        <label for="exampleInputUsername">Your name</label>
                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                    </div>
                    <div class="form-group text-center">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                    </div>
                    <div class="form-group text-center">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group text-center">
                        <label for="description"> Message</label>
                        <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div>
                        <button type="button" class="btn btn-default submit">Send Message <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </section>
@endsection