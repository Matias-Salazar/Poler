@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 form-wrapper">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Genero</label>
                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control" name="genre" required autofocus>
                                @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <!--<strong>{{ $errors->first('name') }}</strong>-->
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Foto de Perfil</label>
                            <form action="procesar.php" enctype="multipart/form-data" method="post">
                                <label for="imagen">Imagen:</label>
                                <input id="imagen" name="imagen" size="30" type="file" />
                             
                                <input name="submit" type="submit" value="Guardar" />
                            </form> 
                        </div>
                        
                        <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                            <label for="birth" class="col-md-4 control-label">Fecha de nacimiento</label>
                            <div class="col-md-6">
                                <input id="birth" type="date" class="form-control" name="birth" required>
                                @if ($errors->has('birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn-principal btn-register">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
