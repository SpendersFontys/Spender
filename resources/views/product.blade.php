@extends('layouts.app')


@section('content')
    <div class="container">
        <div id="fix" class="container">
            <div class="flex-center">
                <div class="title m-b-md">
                    <h3 class="flex-center">E-Card</h3>
                    <img src="{{ asset("img/design pasje zp kopie.png") }}">
                </div>
            </div>

            <div class="flex-center arrow">
                <a href="#eCard"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <section class="bg-lila">
        <div class="container sectionClass">
            <div class="row">
                <center><div class="col-md-4"><img src="{{ asset("img/sending kopie.png") }}"></div></center>
                <center><div class="col-md-4"><img src="{{ asset("img/place kopie.png") }}"></div></center>
                <center><div class="col-md-4"><img src="{{ asset("img/customize kopie.png") }}"></div></center>
                <center><div class="col-md-4">Free next-day delivery <br>
                        on any in-stock E-card ordered by 5:00 p.m.</div></center>
                <center><div class="col-md-4">Pick up at the pop up Spenders Store today <br>
                        Buy online, pick up available items in an hour.</div></center>
                <center><div class="col-md-4">Choose your own color!</div></center>
            </div>
        </div>
    </section>

    <section class="bg-grey sectionClass">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <h4>Life is easier with E-Card</h4>
                    Say hello to your new E-Card, <br> and goodbye your overcrowded wallet!
                </div>
                <div class="col-md-6">
                    <img src="{{ asset("img/pasje liggend met beeld copy kopie.png") }}">
                </div>
            </div>
        </div>
    </section>

@endsection

