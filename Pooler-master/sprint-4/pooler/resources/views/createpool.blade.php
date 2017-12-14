@extends('layouts.app')

@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 home-wrapper">
            <div class="col-md-2">
                <ul>
                    <li><button class="btn-secondary">Crear pool</button></li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="col-md-8 col-md-offset-2">
                    <form action="/home/create-pool" method="post" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Titulo</label>
                            <div class="col-md-6">
                                <input type="text" name="title">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-2 control-label">Descripcion</label>
                            <div class="col-md-6">
                                <input type="text" name="description">
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start_date" class="col-md-2 control-label">Fecha de inicio</label>
                            <div class="col-md-6">
                                <input type="date" name="start_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="col-md-2 control-label">Fecha final</label>
                            <div class="col-md-6">
                                <input type="date" name="end_date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-md-2 control-label">Categoria</label>
                            <div class="col-md-6">
                                <input type="text" name="category">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img_pool" class="col-md-2 control-label">Imagen</label>
                            <div class="col-md-6">
                                <input type="file" name="img_pool" accept="image/*">
                                @if ($errors->has('img_pool'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn-principal">
                                   Crear
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

