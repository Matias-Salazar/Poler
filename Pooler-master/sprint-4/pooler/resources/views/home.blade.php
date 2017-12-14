@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 home-wrapper">
            <div class="col-md-2">
                <ul>
                    <li><a href="{{url ('home/create-pool')}}"><button class="btn-secondary">Crear pool</button></a></li>
                </ul>
            </div>
                <div class="container">
                    <div class="carousel-container">
                        <button class="carousel-previous">prev</button>
                        <figure class="carousel">
                            <ul>
                                <li><img src="/assets/gallery-asset/gallery-1.jpg">
                                <li><img src="/assets/gallery-asset/gallery-2.jpg">
                                <li><img src="/assets/gallery-asset/gallery-3.jpg">
                                <li><img src="/assets/gallery-asset/gallery-4.jpg">
                                <li><img src="/assets/gallery-asset/gallery-5.jpg">
                            </ul>
                        </figure>
                        <button class="carousel-advance">Next</button>
                    </div>

                    <script src="./carousel-example.js"></script>
                </div>
            <div class="col-md-10">
            </div>
        </div>
    </div>
</div>
@endsection
