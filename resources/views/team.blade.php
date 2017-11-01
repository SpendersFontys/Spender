@extends('layouts.app')

@section('content')
    <section class="bg-lila">
        <div class="container sectionClass">
            <header class="text-center">
                <h2 class="teamheader"><strong>Team</strong> Pagina</h2>
            </header>
            <div class="row">
                <span class="item-image">
                    <img id="changeImg" class="img-responsive mySlides" src="{{ asset("img/team/treamtrap1.png") }}" alt="">
                    <img id="changeImg" class="img-responsive mySlides" src="{{ asset("img/team/treamtrap2.png") }}" alt="">
                    <img id="changeImg" class="img-responsive mySlides" src="{{ asset("img/team/treamtrap3.png") }}" alt="">
                    <img id="changeImg" class="img-responsive mySlides" src="{{ asset("img/team/treamtrap4.png") }}" alt="">
                    <img id="changeImg" class="img-responsive mySlides" src="{{ asset("img/team/treamtrap5.png") }}" alt="">
                </span>
                <br>
                <div class="caption text-left">
                    <div class="clearfix margin-bottom10">
                        <div class="pull-left">
                            <h2 class="nomargin">Oprichters van Spenders</h2>
                        </div>
                    </div>
                    <p class="noborder nomargin nopadding">“Spenders” is ontstaan omdat er een probleem is waar we dagelijks tegenaan lopen.
                        Onze portemonnees zijn vaak onnodig te dik.
                        De voornaamste reden hiervoor is, zoals eerder beschreven,
                        dat we iedere dag teveel pasjes met ons meedragen waardoor we tegen meerdere problemen aanlopen die simpel zijn te voorkomen.
                        Zo is een te dikke portemonnee niet alleen onhandig om met je mee te dragen, maar slijten je broeken zo ook sneller,
                        moet je vaak langer zoeken naar de juiste pasjes, beschadigen de pasjes of misschien raak je wel weer pasjes kwijt.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-ultralightgrey sectionClass">
                <h2 class="text-center teamheader">
                    <strong>Team</strong> Buisness
                </h2>
                <div class="col-md-6">
                    <div class="box-content thumbnail text-center">
                        <span class="item-image">
                            <img class="img-responsive" src="{{ asset("img/solo/WesselSolo.png") }}" alt="">
                        </span>
                        <div class="caption text-left">

                            <div class="clearfix margin-bottom10">
                                <div class="pull-left">
                                    <h2 class="nomargin">Wessel Jansen
                                        <small class="block">Business</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box-content thumbnail text-center">
                        <span class="item-image">
                            <img class="img-responsive" src="{{ asset("img/solo/WillemSolo.png") }}" alt="">
                        </span>
                        <div class="caption text-left">

                            <div class="clearfix margin-bottom10">
                                <div class="pull-left">
                                    <h2 class="nomargin">Willem Simonis
                                        <small class="block">Business</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row bg-lightgrey">
            <div class="col-md-6 bg-lila sectionClass">
                <h2 class="text-center teamheader">
                    <strong>Team</strong> Media
                </h2>
                <div class="col-md-6">
                    <div class="box-content thumbnail text-center">
                            <span class="item-image">
                                <img class="img-responsive" src="{{ asset("img/solo/BryanSolo.png") }}" alt="">
                            </span>
                        <div class="caption text-left">

                            <div class="clearfix margin-bottom10">
                                <div class="pull-left">
                                    <h2 class="nomargin">Bryan Schoot
                                        <small class="block">Media developer</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-content thumbnail text-center">
                            <span class="item-image">
                                <img class="img-responsive" src="{{ asset("img/solo/NeeltjeSolo.png") }}" alt="">
                            </span>
                        <div class="caption text-left">

                            <div class="clearfix margin-bottom10">
                                <div class="pull-left">
                                    <h2 class="nomargin"> Neeltje van Tilburg
                                        <small class="block">Media designer</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 bg-lightgrey color-white sectionClass">
                <h2 class="text-center teamheader">
                    <strong>Team</strong> Software
                </h2>
                <div class="col-md-offset-3 col-md-6"><!-- member -->
                    <div class="box-content thumbnail text-center">
                        <span class="item-image">
                            <img class="img-responsive" src="{{ asset("img/solo/NicoSolo.png") }}" alt="">
                        </span>
                        <div class="caption text-left">

                            <div class="clearfix margin-bottom10">
                                <div class="pull-left">
                                    <h2 class="nomargin"> Nico Shultz
                                        <small class="block">The developer!</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Img changer--}}
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 1000);
            // Change image every 1 seconds
        }
    </script>
@endsection