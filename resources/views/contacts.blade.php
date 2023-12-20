@extends('layouts.app')

@section('title', 'Kontakti - ')

@section('main')
    <div class="container" style="min-height: 500px;">
        <div class="row">
            <div class="col">
                <h2 id="contacts">Kontakti</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <table>
                    <tr>
                        <td><b>Adrese:</b></td>
                        <td>Lielā Skolas iela 6, Cēsis, Latvija, LV-4101</td>
                    </tr>
                    <tr>
                        <td><b>Tālrunis:</b></td>
                        <td><a href="tel:+37129853365">+371 29 853 365</a></td>
                    </tr>
                    <tr>
                        <td><b>E-pasts:</b></td>
                        <td><a href="mailto:arheologiska.izpete@gmail.com">arheologiska.izpete@gmail.com</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://www.facebook.com/Arheologiskaizpete/" target="_blank"><img src="img/f_logo.png"
                                    height="30px"></a> <a href="https://www.instagram.com/arheologiska_izpete/"
                                target="_blank"><img src="img/insta_logo.png" height="30px"></a></td>
                    </tr>
                </table>

            </div>
            <div class="col-8">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2154.727737275332!2d25.26811648541899!3d57.31250771267754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ebe185872f5555%3A0xa92d1577700ed6b7!2zQXJoZW9sb8SjaXNrxIEgaXpwxJN0ZSBTSUE!5e0!3m2!1slv!2slv!4v1691955074174!5m2!1slv!2slv"
                    width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    @endsection
