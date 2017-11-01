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

    <div id="eCard" class="bg-lila sectionClass">
        <div class="container">
            <h2 class="text-center">HALLO TOEKOMST</h2>
            <p class="text-center">Heeft u ook een overvolle portemonnee?<br>
                Sla al uw pasjes veilig op en digitaliseer uw portemonnee met uw eigen E CARD <br></p>
            <br>
            <img class="img-responsive" src="{{ asset("img/PASJE1.png") }}">
            <div class="text-center">
                <p></p>
                <a href="{{ route('product') }}" class="btn btn-primary bg-offwhite ">Koop nu!</a>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>

    <div id="eCard" class="sectionClass">
        <div class="container">
            <h2 class="text-center"><b>SPENDERS</b></h2>
            <p class="text-center">
                <br>
                Als bedrijf is Spenders gespecialiseerd in het maken van Touch screen pasjes.<br>
                Deze pasjes zullen voor commerciële doeleindes gebruikt worden. Het voornaamste <br>
                doel van Spenders is om alle kortings kaarten die er beschikbaar zijn te verzamelen <br>
                en dit terug te brengen naar 1 pasje. Het is dus de bedoeling dat de klant hier zelf <br>
                in kan bepalen welke pasjes er in gebruik genomen gaan worden.<br>
                <br></p>
            <br>
            </div>
        </div>
    </div>
    </section>
@endsection