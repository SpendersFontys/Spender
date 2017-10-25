@extends('layouts.app')

@section('content')
    <section class="sectionClass">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h2 class="text-center">E-card</h2>
                    <img class="img-responsive center-block" src="{{ asset("img/design pasje zp kopie.png") }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-4 col-md-4 text-center arrow">
                    <a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-lila">
        <div class="container sectionClass">
            <header>
                <h2 class="text-center">What we offer!</h2>
            </header>
            <hr>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-plane faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Free next-day delivery<br>on any in-stock E-card ordered by 5:00 p.m.</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-home faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Pick up at the pop up Spenders Store today<br>Buy online, pick up available items in an hour.</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-plus-square faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Choose your own color!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey sectionClass">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Life is easier with E-Card</h2>
                    <p>Say hello to your new E-Card, <br> and goodbye your overcrowded wallet!</p>
                </div>
                <div class="col-md-8">
                    <img class="img-responsive" src="{{ asset("img/pasje liggend met beeld copy kopie.png") }}">
                </div>
            </div>
        </div>
    </section>
@endsection

