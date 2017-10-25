@extends('layouts.app')

@section('content')
    <section class="sectionClass">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <img class="img-responsive bg-ultralightgrey center-block" src="{{ asset("img/LOGO3.png") }}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-4 col-md-4 text-center arrow">
                <a href="#eCard"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    </section>

    <section id="eCard" class="bg-lila sectionClass">
        <div class="container">
            <h2 class="text-center">E Card</h2>
            <p class="text-center">Say hello to your new card!</p>
            <img class="img-responsive" src="{{ asset("img/PASJE1.png") }}">
            <p class="text-center">E Card is built for you! The E Card is designed by a team of Media Panda's.</p>
        </div>
    </section>
@endsection