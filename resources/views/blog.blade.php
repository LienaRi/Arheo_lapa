@extends('layouts.app')

@section('title', 'Jaunumi - ')

@section('main')
    <div class="container" style="min-height: 500px;">
        <div class="row">
            <div class="col">
                <h2 id="blog">Jaunumi</h2>
                <hr>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h3>Neliela apmēra izrakumi Cēsu vecpilsētā</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p class="post-meta">11. augusts, 2023</p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <p class="post-content">No 8. līdz 31. augustam norisināsies maza apjoma arheoloģiskie izrakumi, lai atsegtu
                    Šaurās ielas bruģa segumu. Šaurā iela atrodas Cēsīs, t.s. “Pionieru laukumā”, kas vēl 20. gs. pirmajā
                    pusē bijusi četru kvartālu dzīvojamā apbūve ar divām bruģētām ielām. Arheoloģiskā izpēte notiek ar Cēsu
                    novada kultūras projekta konkursa atbalstu.</p>
            </div>
            <div class="col-4">
                <img src="img/Saura_iela.jpeg" alt="Šaurās ielas izrakumi" class="img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <h3>Arheoloģiskās izpētes darbi Zilajā kalnā</h3>
                <p class="post-meta">28. jūnijs, 2023</p>
                <p class="post-content">Kopš 2022. gada rudens veicam arheoloģisko priekšizpēti jauna skatu torņa
                    būvniecībai Zilajā
                    kalnā (Valmieras novads). Līdz šim esam atklājuši gandrīz 30 cilvēku apbedījumus, domājams, sievietes un
                    bērnus,
                    kas saistāmi ar 16. - 17. gs. kapsētu. Kapsētas pastāvēšana šajā vietā ir zināma jau kopš 19. gs., bet
                    arheoloģiskā izpēte senvietā notikusi jau 20. gs. ugunsnovērošanas torņa būvniecības laikā.</p>
            </div>
            <div class="col-4">
                <img src="img/ZK.jpg" alt="zilais kalns" class="img-fluid">
            </div>
        </div>

    @endsection
