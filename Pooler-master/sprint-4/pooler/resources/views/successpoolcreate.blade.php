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
            <div class="col-md-10">
                <p>Felicitaciones, creaste un <span class="logo-color-secundary">Pool</span></p>
            </div>
        </div>
    </div>
</div>
@endsection
