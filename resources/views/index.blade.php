@extends('layouts.app')

@section('title', '')

@section('main')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-content">
                <h1>SIA "Arheoloģiskā izpēte"</h1>
                <h2>Arheoloģiskās izpētes un uzraudzības pakalpojumi</h2>
            </div>
            <div class="carousel-item active">
                <img src="img/fp1.jpg" class="d-block w-100" alt="Cēsu izrakumu laukumi">
            </div>
            <div class="carousel-item">
                <img src="img/fp2.jpg" class="d-block w-100" alt="Cēsu Jāņa baznīcas kapi">
            </div>
            <div class="carousel-item">
                <img src="img/fp3.jpg" class="d-block w-100" alt="Valmieras nocietinājumi">
            </div>
            <div class="carousel-item">
                <img src="img/fp4.jpg" class="d-block w-100" alt="Ungurmuižas leduspagrabs">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
