@extends('layouts.app')

@section('content')
    <section class="sectionClass">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <h2 class="text-center">E-card</h2>
                    <img class="img-responsive center-block" src="{{ asset("img/Pasje-liggend-met-beeld.png") }}">
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
                <h2 class="text-center">Wat wij aanbieden</h2>
            </header>
            <hr>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-plane faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Gratis verzending.<br>Voor 10.00 besteld, morgen in huis.</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-home faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Haal nu je eigen E-CARD op bij een van de pop up stores,
                        of bestel hem online.</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="text-center">
                        <i class="fa fa-plus-square faContact" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Kies je eigen kleur.</p>
                </div>
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
                    <br>
                    <h2><b>HET PRODUCT</b></h2>
                    <p> Draagt u ook te veel pasjes met u mee?
                        Spenders heeft een oplossing bedacht,
                        om het probleem van de hoeveelheid pasjes die je hebt zitten in je portemonnee,
                        terug te brengen naar één fysiek pasje. Ons product bestaat uit een Touch screen dat net zo groot is als een algemeen pasje.
                        Dit pasje is gelinkt aan een applicatie op je telefoon waar, als je info en pasjes hebt, deze hierin staan staan.
                        <br><br>
                        Zeg hallo tegen je nieuwe E-CARD<br>en vaarwel tegen die onnodige dikke portemonnee!</p>
                </div>
                <div class="col-md-8">
                    <img class="img-responsive" src="{{ asset("img/design pasje zp kopie.png") }}">
                </div>
            </div>
        </div>
    </section>
@endsection

