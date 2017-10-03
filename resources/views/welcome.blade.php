@extends('layouts.app')

@section('content')
    <div id="fix" class="container">
        <div class="flex-center">
            <div class="title m-b-md">
                    <img class="imgFix img-responsive" src="{{ asset("img/LOGO3.png") }}">
            </div>
        </div>

        <div class="flex-center arrow">
            <a href="#eCard"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
        </div>
    </div>

    <section id="eCard" class="bg-lila">
        <div class="container">
            <h1 class="flex-center">E Card</h1>
            <p class="flex-center">Say hello to youre new card!</p>
            <img class="img-responsive" src="{{ asset("img/PASJE1.png") }}">
            <p>
                E Card is built for you! The E Card is designed by a team of Media Panda's.
            </p>
        </div>
    </section>
@endsection